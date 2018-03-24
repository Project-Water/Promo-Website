// ref: http://stackoverflow.com/a/1293163/2343
// This will parse a delimited string into an array of
// arrays. The default delimiter is the comma, but this
// can be overriden in the second argument.
function CSVToArray(strData, strDelimiter) {
    // Check to see if the delimiter is defined. If not,
    // then default to comma.
    strDelimiter = (strDelimiter || ",");

    // Create a regular expression to parse the CSV values.
    var objPattern = new RegExp(
        (
            // Delimiters.
            "(\\" + strDelimiter + "|\\r?\\n|\\r|^)" +

            // Quoted fields.
            "(?:\"([^\"]*(?:\"\"[^\"]*)*)\"|" +

            // Standard fields.
            "([^\"\\" + strDelimiter + "\\r\\n]*))"
        ),
        "gi"
    );


    // Create an array to hold our data. Give the array
    // a default empty first row.
    var arrData = [
        []
    ];

    // Create an array to hold our individual pattern
    // matching groups.
    var arrMatches = null;


    // Keep looping over the regular expression matches
    // until we can no longer find a match.
    while (arrMatches = objPattern.exec(strData)) {

        // Get the delimiter that was found.
        var strMatchedDelimiter = arrMatches[1];

        // Check to see if the given delimiter has a length
        // (is not the start of string) and if it matches
        // field delimiter. If id does not, then we know
        // that this delimiter is a row delimiter.
        if (
            strMatchedDelimiter.length &&
            strMatchedDelimiter !== strDelimiter
        ) {

            // Since we have reached a new row of data,
            // add an empty row to our data array.
            arrData.push([]);

        }

        var strMatchedValue;

        // Now that we have our delimiter out of the way,
        // let's check to see which kind of value we
        // captured (quoted or unquoted).
        if (arrMatches[2]) {

            // We found a quoted value. When we capture
            // this value, unescape any double quotes.
            strMatchedValue = arrMatches[2].replace(
                new RegExp("\"\"", "g"),
                "\""
            );

        } else {

            // We found a non-quoted value.
            strMatchedValue = arrMatches[3];

        }


        // Now that we have our value string, let's add
        // it to the data array.
        arrData[arrData.length - 1].push(strMatchedValue);
    }

    // Return the parsed data.
    return (arrData);
}

function StringSet() {
    var setObj = {},
        val = {};

    this.contains = function(str) {
        return setObj[str] === val;
    };

    this.add = function(str) {
        if (!this.contains(str))
            setObj[str] = val;
    };

    this.remove = function(str) {
        delete setObj[str];
    };

    this.values = function() {
        var values = [];
        for (var i in setObj) {
            if (setObj[i] === val) {
                values.push(i);
            }
        }
        return values;
    };
}

var schedule;
var selectedTeam = "";

function updatePage(snapshot) {
    var tableData = "";
    var teamNameString = '<option value="Choose a team">Choose a team</option>';
    var teamNames = new StringSet();
    schedule = snapshot.val();


    for (var i = 0; i < schedule.length; i++) {
        teamNames.add(schedule[i]["team"]);
    }

    var names = teamNames.values().sort();

    if ($("#teamChooser select").is(':empty')) {
        for (var i = 0; i < names.length; i++) {
            teamNameString += `<option value="${names[i]}">${names[i]}</option>`;
        }
        $("#teamChooser select").html(teamNameString);
    }
    if (selectedTeam != "")
        $("#teamChooser select").change();

    if ($("#loader").css('display') == 'block') {
        $("#loader").css('display', 'none');
        $("#teamChooser").css('display', 'block');
    }
}

function checkHighlight() {
    var currentTime = new Date();
    $("#scheduleTable tbody").children().each(function() {
        var item = $(this)[0];
        var time = $($(item).children()[0]).text();
        var event = $($(item).children()[1]).text();
        if (event == "Project Water Experience")
            event = "Project Experience";
        var savedHour = time.substring(0, 2);
        if (savedHour.charAt(1) == ":")
            savedHour = savedHour.substring(0, 1);
        var savedMin = time.slice(-2);

        var newDate = new Date();
        if(savedHour == 12)
          newDate.setHours(12);
        else if(savedHour >= 7 && savedHour < 12)
          newDate.setHours(parseInt(savedHour));
        else
          newDate.setHours(parseInt(savedHour) + 12);
        newDate.setMinutes(parseInt(savedMin));

        var offset = 0;
        if(event == "Lunch")
          offset = 30;
        else if(event == "Project Experience")
          offset = 40;
        else
          offset = 5;

        if(currentTime - newDate < 2 * 60 * 1000 || currentTime + newDate > offset * 60 * 1000)
          $(item).css('color', 'red');
        else if(event == "Project Experience" || event == "Lunch")
          $(item).css('color', 'black');
        else
          $(item).css('color', 'white');


    });
}

$(document).ready(function() {
    $("#teamChooser select").on('change', function() {
        if (this.value == "Choose a team") {
            $("#scheduleTable tbody").html("");
            $("#playersDiv").css('display', 'none');
            return;
        }
        selectedTeam = this.value;
        var scheduleHTML = "";
        var items = [];
        for (var i = 0; i < schedule.length; i++)
            if (schedule[i]["team"] == this.value)
                items.push(schedule[i])

        items.sort(function(a, b) {
            var time1 = a['time'];
            var time2 = b['time'];

            var hour1 = time1.substring(0, 2);
            if (hour1.charAt(1) == ":")
                hour1 = hour1.substring(0, 1);

            var hour2 = time2.substring(0, 2);
            if (hour2.charAt(1) == ":")
                hour2 = hour2.substring(0, 1);

            //am or pm
            if ((hour1 >= 7 && hour1 <= 11 && hour2 >= 7 && hour2 <= 11) || (hour1 >= 12 && hour1 <= 6 && hour2 >= 12 && hour2 <= 16)) {
                var mins1 = time1.slice(0, -2);
                var mins2 = time2.slice(0, -2);

                if (hour1 != hour2)
                    return hour1 - hour2;
                else
                    return mins1 - mins2;
            }
            //hour 1 is am, hour 2 is pm
            else if (hour1 >= 7 && hour1 <= 11 && hour2 >= 12 && hour2 <= 6) {
                return 1;
            }
            //hour 1 is pm, hour 2 is am
            else if (hour1 >= 12 && hour1 <= 6 && hour2 >= 7 && hour2 <= 11) {
                return -1;
            }
        });



        for (var i = 0; i < items.length; i++) {
            var competitor = items[i]['competitor'];
            if(competitor == "Project Water Experience")
                competitor = "Project Experience";
            scheduleHTML += '<tr>';
            scheduleHTML += `<td>${items[i]['time']}</td>`;
            scheduleHTML += `<td>${competitor}</td>`;
            scheduleHTML += `<td>${items[i]['location']}</td>`;
            scheduleHTML += '</tr>';
        }

        var teammates = "";
        if(items.length > 0)
            teammates = items[0]['playerNames'];

        $("#playersDiv").css('display', 'block');
        $("#players").html(teammates);
        $("#scheduleTable tbody").html(scheduleHTML);
        
        checkHighlight();
    });
    window.setTimeout(function() {
        checkHighlight();
    }, 15000);

    var teamData = firebase.database().ref('/schedule/' + school);
    teamData.on('value', function(snapshot) {
        updatePage(snapshot);
    });


    return firebase.database().ref('/schedule/' + school).once('value').then(function(snapshot) {
        updatePage(snapshot);
    });
});