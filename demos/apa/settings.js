var Aloha = window.Aloha || ( window.Aloha = {} );

Aloha.settings = {
	locale: 'en',
	plugins: {
		format: {
			config: [  'b', 'i', 'sub', 'sup', 'title', 'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'pre', 'removeFormat' ],
		  	editables : {
				// no formatting allowed for title
				'#title'	: [ ]
		  	}
		},
		link: {
			editables : {
				// No links in the title.
				'#title'	: [  ]
		  	}
		},
		list: {
			editables : {
				// No lists in the title.
				'#title'	: [  ]
		  	}
		},
		abbr: {
			editables : {
				// No abbr in the title.
				'#title'	: [  ]
		  	}
		},
		image: {
			'fixedAspectRatio': true,
			'maxWidth': 350,
			'minWidth': 100,
			'maxHeight': 786,
			'minHeight': 100,
			'globalselector': '.global',
			'ui': {
				'oneTab': false
			},
			editables : {
				// No images in the title.
				'#title'	: [  ]
		  	}
		}
	},
	sidebar: {
		disabled: true
	},
	contentHandler: {
	    allows: {
			elements: [
				'a', 'abbr', 'b', 'blockquote', 'br', 'caption', 'cite', 'code', 'col',
				'colgroup', 'dd', 'del', 'dl', 'dt', 'em', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
				'i', 'img', 'li', 'ol', 'p', 'pre', 'q', 'small', 'strike', 'strong',
				'sub', 'sup', 'table', 'tbody', 'td', 'tfoot', 'th', 'thead', 'tr', 'u',
				'ul', 'span', 'hr', 'object', 'div'
			],

			attributes: {
				'a': ['href', 'title', 'id', 'class', 'target', 'data-gentics-aloha-repository', 'data-gentics-aloha-object-id'],
				'div': [ 'id', 'class'],
				'abbr': ['title'],
				'blockquote': ['cite'],
				'br': ['class'],
				'col': ['span', 'width'],
				'colgroup': ['span', 'width'],
				'img': ['align', 'alt', 'height', 'src', 'title', 'width', 'class'],
				'ol': ['start', 'type'],
				'q': ['cite'],
				'p': ['class'],
				'table': ['summary', 'width'],
				'td': ['abbr', 'axis', 'colspan', 'rowspan', 'width'],
				'th': ['abbr', 'axis', 'colspan', 'rowspan', 'scope', 'width'],
				'ul': ['type'],
				'span': ['class','style','lang','xml:lang']
			},

			protocols: {
				'a': {'href': ['ftp', 'http', 'https', 'mailto', '__relative__']},
				'blockquote': {'cite': ['http', 'https', '__relative__']},
				'img': {'src' : ['http', 'https', '__relative__']},
				'q': {'cite': ['http', 'https', '__relative__']}
			}
		}
	}
};