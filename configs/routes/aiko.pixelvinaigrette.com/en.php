<?php
the()->fmkHttpRoot="";// /github/classiq-startup
the()->configProjectUrl=new \Pov\Configs\ProjectUrl("aiko.pixelvinaigrette.com/en"); // localhost/github/classiq-startup/fr
the()->fileSystem=new \Pov\Configs\FileSystem("project");
the()->configProjectUrl->seoActive=true;
the()->boot->loadProject("project");
the()->project->langCode="en";
the()->project->languages=["fr","en"];
the()->project->languagesUrls=[
    "fr"=>"http://aiko.pixelvinaigrette.com/fr",
    "en"=>"http://aiko.pixelvinaigrette.com/en"
];
//force https?
the()->configProjectUrl->forceHttps=false;
// Traductions ui.
// https://docs.google.com/spreadsheets/d/1bbmh2HDgXPX2Nd2MMnfVGUke0OnaegBA25Pt9TmsYjQ/edit?usp=sharing
the()->project->config_translations_csv_url="https://docs.google.com/spreadsheets/d/1bbmh2HDgXPX2Nd2MMnfVGUke0OnaegBA25Pt9TmsYjQ/export?gid=0&format=csv";
the()->project->config_translations_debug=true; //quand true recharge à chaque fois le CSV

//config options

//Google Map etc...
//site()->googleApiKey="xxxxx";

//Google webmaster tools
//site()->googleSiteVerification="xxxxx";

//Google analytics
//site()->googleAnalyticsId="UA-xxxxxx";