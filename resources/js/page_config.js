title = $('title').html();

global.page={
    "about": {
        "js": "about.js",
        "tab": "tab-1",
        "html": "about",
        "main": 1,
        "title": title + " - About"
    },
    "portfolio": {
        "js": "",
        "tab": "tab-2",
        "html": "portfolio",
        "main": 1,
        "title": title + " - Portfolio"
    },
    "resume": {
        "js": "resume.js",
        "tab": "tab-3",
        "html": "resume",
        "main": 1,
        "title": title + " - Resume"
    },
    "private": {
        "js": "",
        "tab": "tab-4",
        "html": "private",
        "main": 1,
        "title": title + " - Private"
    }
};

global.options={
    "openStart": "",
    "title": title,
    //"meta": {
    //    "keywords": "black, clean, creative, curriculum, curriculum vitae, cv, dark, minimalist, personal, personal profile, personal vcard, portfolio, resume, vcard, virtual card",
    //    "description": "Cascade is a minimalist personal vCard template based on four vertical menu tabs. The first tab is a typical descriptive about page with slider, the second is a gallery with build-in lightbox, next tab is a personal info page and the last tab is the contact page with working form."
    //}
};

global.request='';
