<?php require_once 'php/app.php' ?>
<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Aloha Editor Contributors</title>

  <script src="./lib/jquery.min.js"></script>
  <script src="./jquery.handsontable.js"></script>
  <script src="./lib/bootstrap-typeahead.js"></script>
  <script src="./lib/jquery.autoresize.js"></script>
  <script src="./lib/jQuery-contextMenu/jquery.contextMenu.js"></script>
  <script src="./lib/jQuery-contextMenu/jquery.ui.position.js"></script>
  <link rel="stylesheet" media="screen" href="./lib/jQuery-contextMenu/jquery.contextMenu.css">
  <link rel="stylesheet" media="screen" href="./jquery.handsontable.css">

  <script src="./js/json2.min.js"></script>
  <link rel="stylesheet" media="screen" href="./css/backend.css">
</head>

<body>

<div id="container">
  <h1><a href="./index.html">Aloha Editor Contributors</a></h1>

  <div class="description">
    Manage Aloha Editor Team (Core, Contributor, Translator)
  </div>

  <div id="exampleGrid" class="dataTable"></div>

	<br />

  <div id="exampleConsole" class="console">Click "Load" to load data from server</div>

  <p>
    <button name="load">Load</button>
    <button name="save">Save</button>
    <label><input type="checkbox" name="autosave" checked="checked" autocomplete="off"> Autosave</label>
	| <a href="?logout">logout</a>
  </p>

  <script>
    var $container = $("#exampleGrid");
    var $console = $("#exampleConsole");
    var $parent = $container.parent();
    var autosaveNotification;
    $container.handsontable({
      rows: 8,
      cols: 9,
      rowHeaders: true,
      colHeaders: ['Team', 'Name', 'eMail', 'Github', 'Position', 'Backlink', 'Country', 'Translation', 'Remarks'],
      minSpareCols: 0,
      minSpareRows: 1,
      contextMenu: true,
	legend: [
      {
        match: function (row, col, data) {
          if (col == 0 || col == 6 || col == 7) {
            return true;
          }
          return false;
        },
        style: {
          fontStyle: 'italic' //make the text italic
        },
        title: "Type to show the list of options"
      }
    ],
    
	autoComplete: [
      {
        match: function (row, col, data) {
          return (col === 0); //if it is first column
        },
        source: function () {
          return ["Core", "Contributor", "Translator"]
        },
        strict: true //only accept predefined values (from array above)
      },

      {
        match: function (row, col, data) {
          return (col == 6 || col == 7);
        },
        highlighter: function (item) {
          var query = this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, '\\$&');
          var label = item.replace(new RegExp('(' + query + ')', 'ig'), function ($1, match) {
            return '<strong>' + match + '</strong>';
          });
          return '<span style="background: url(../flags/' + item + '.gif) no-repeat;">&nbsp;&nbsp;&nbsp;</span>' + label;
        },
        source: function () {
          return ["ad", "ae", "af", "ag", "ai", "al", "am", "an", "ao", "aq", "ar", "ar.orig", "as", "at", "au", "aw", "ax", "az", "ba", "bb", "bd", "be", "bf", "bg", "bh", "bi", "bj", "bm", "bn", "bo", "br", "bs", "bt", "bv", "bw", "by", "bz", "ca", "cc", "cd", "cf", "cg", "ch", "ci", "ck", "cl", "cm", "cn", "co", "cr", "cs", "cu", "cv", "cx", "cy", "cz", "da", "de", "dj", "dk", "dm", "do", "dz", "ec", "ee", "eg", "eh", "er", "es", "et", "eu", "fi", "fj", "fk", "fm", "fo", "fr", "ga", "gb", "gd", "ge", "gf", "gg", "gh", "gi", "gl", "gm", "gn", "gp", "gq", "gr", "gs", "gt", "gu", "gw", "gy", "hk", "hm", "hn", "hr", "ht", "hu", "id", "ie", "il", "im", "in", "io", "iq", "ir", "is", "it", "je", "jm", "jo", "jp", "ke", "kg", "kh", "ki", "km", "kn", "kp", "kr", "kw", "ky", "kz", "la", "lb", "lc", "li", "lk", "lr", "ls", "lt", "lu", "lv", "ly", "ma", "mc", "md", "me", "mg", "mh", "mk", "ml", "mm", "mn", "mo", "mp", "mq", "mr", "ms", "mt", "mu", "mv", "mw", "mx", "my", "mz", "na", "nc", "ne", "nf", "ng", "ni", "nl", "no", "np", "nr", "nu", "nz", "om", "pa", "pe", "pf", "pg", "ph", "pk", "pl", "pm", "pn", "pr", "ps", "pt-br", "pt", "pw", "py", "qa", "re", "ro", "rs", "ru", "rw", "sa", "sb", "sc", "sd", "se", "sg", "sh", "si", "sk", "sl", "sm", "sn", "so", "sr", "sri", "st", "sv", "sw", "sy", "sz", "tc", "td", "tf", "tg", "th", "tj", "tk", "tl", "tm", "to", "tp", "tr", "tt", "tv", "tw", "tz", "ua", "ug", "uk", "um", "us", "uy", "uz", "va", "vc", "ve", "vg", "vi", "vn", "vu", "wf", "ws", "ye", "yt", "yu", "za", "zh", "zm", "zr", "zw"]
        },
        strict: false //allows other values that defined in array above
      }

    ],
    
      onChange: function (change, source) {
        if (source === 'loadData') {
          return; //don't save this change
        }
        if ($parent.find('input[name=autosave]').is(':checked')) {
          clearTimeout(autosaveNotification);
          $.ajax({
            url: "php/save.php",
            dataType: "json",
            type: "POST",
            data: {changes: change}, //contains changed cells' data
            success: function (data) {
              $console.text('Autosaved (' + change.length + ' cell' + (change.length > 1 ? 's' : '') + ')');
              autosaveNotification = setTimeout(function () {
                $console.text('Changes will be autosaved');
              }, 1000);
            }
          });
        }
      }
    });
    var handsontable = $container.data('handsontable');

    $parent.find('button[name=load]').click(function () {
      $.ajax({
        url: "php/load.php",
        dataType: 'json',
        type: 'GET',
        success: function (res) {
          var data = [], row;
          for (var i = 0, ilen = res.team.length; i < ilen; i++) {
            row = [];
            row[0] = res.team[i].team;
            row[1] = res.team[i].fullname;
            row[2] = res.team[i].email;
            row[3] = res.team[i].github;
            row[4] = res.team[i].position;
            row[5] = res.team[i].backlink;
            row[6] = res.team[i].country;
            row[7] = res.team[i].translation;
            row[8] = res.team[i].remarks;
            data[res.team[i].id - 1] = row;
          }
          handsontable.loadData(data);
          $console.text('Data loaded');
        }
      });
    }).click(); //execute immediately

    $parent.find('button[name=save]').click(function () {
      $.ajax({
        url: "php/save.php",
        data: {"data": handsontable.getData()}, //returns all cells' data
        dataType: 'json',
        type: 'POST',
        success: function (res) {
          if (res.result === 'ok') {
            $console.text('Data saved');
          }
          else {
            $console.text('Save error');
          }
        },
        error: function () {
          $console.text('Save error');
        }
      });
    });

    $parent.find('input[name=autosave]').click(function () {
      if ($(this).is(':checked')) {
        $console.text('Changes will be autosaved');
      }
      else {
        $console.text('Changes will not be autosaved');
      }
    });
  </script>

</div>
</body>
</html>