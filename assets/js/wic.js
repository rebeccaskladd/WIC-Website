function eboardInitial() {
    selectEboard('president');
}

function selectEboard(id) {
    document.getElementById(id).style.fontWeight = "bold";
    unselect_all_eboard_nav(id);
    show_eboard_content(id);
}

function unselect_all_eboard_nav(id) {
    var nav = ['president', 'vice-president', 'treasurer', 'secretary',
        'outreach-chair', 'corporate-relations', 'webmaster', 'lean-in-chair',
        'social-chair', 'community-relations'];
    for (var i = 0; i < nav.length; i++) {
        if (nav[i] != id) {
            document.getElementById(nav[i]).style.fontWeight = "400";
        }
    }
}

function show_eboard_content(id) {
    var nav = ['president', 'vice-president', 'treasurer', 'secretary',
        'outreach-chair', 'corporate-relations', 'webmaster', 'lean-in-chair',
        'social-chair', 'community-relations'];
    var content = id + "-content";
    for (var i = 0; i < nav.length; i++) {
        var currContent = nav[i] + "-content";
        if (currContent != content) {
            document.getElementById(currContent).style.display = 'none';
        }
        else {
            document.getElementById(currContent).style.display = 'block';
        }
    }
}

function alumniInitial() {
    selectAlumni('1718')
}

function selectAlumni(id) {
    document.getElementById(id).style.fontWeight = "bold";
    unselect_all_alumni_nav(id);
    show_alumni_content(id);
}

function unselect_all_alumni_nav(id) {
    var nav = ['1718', '1617', '1516', '1415', '1314', '1213'];
    for (var i = 0; i < nav.length; i++) {
        if (nav[i] != id) {
            document.getElementById(nav[i]).style.fontWeight = "400";
        }
    }
}

function show_alumni_content(id) {
    var nav = ['1718', '1617', '1516', '1415', '1314', '1213'];
    var content = id + "-content";
    for (var i = 0; i < nav.length; i++) {
        var currContent = nav[i] + "-content";
        if (currContent != content) {
            document.getElementById(currContent).style.display = 'none';
        }
        else {
            document.getElementById(currContent).style.display = 'block';
        }
    }
}
