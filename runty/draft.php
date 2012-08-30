<?php
/* draft.php is part of the Runty NoCMS project http://runtyapp.org
*
* Runty is a handy NoCMS utilizing the power of Aloha Editor
* -- a modern WYSIWYG HTML5 inline editing library and editor.
*
*
* Runty is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or any later version.
*
* Runty is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
*
* Online: https://www.gnu.org/licenses/gpl-2.0.html
*/


/*
respond('GET', '/draft', $callback);
respond('POST', '/draft/create', $callback);
respond('PUT', '/draft/[i:id]', $callback);
respond('DELETE', '/draft/[i:id]', $callback);
*/


with('/runty/draft', function () {

	respond('GET', '/?', function ($request, $response) {
		echo 'Runty. Draft.';
	});

	respond(array('POST','GET'), '/[publish|remove:action]/[:uri]?', function ($request, $response) {
		switch ($request->action) {
			case 'remove':
				if ( unlink('../.runty/draft/' . $request->uri) ) {
					echo 'File '.$request->uri.' removed.';
				} else {
					echo 'File '.$request->uri.' not removed.';
				}
			break;
			
			case 'publish':
				$backup = copy('../'.$request->uri, '../.runty/backup/' . $request->uri.'.'.date('md-Hi').'.bak');
				$publish = copy('../.runty/draft/' . $request->uri, '../'.$request->uri);
				
				if ($backup && $publish) {
					if ( unlink('../.runty/draft/' . $request->uri)) {
						echo 'File '.$request->uri.' published.';
					} else {
						echo 'File '.$request->uri.' not published.';
					}
				}
			break;
			
			default:
				echo 'Runty: Draft. Some troubles here...';
			break;
		}
	});
});

