<?php
the()->project->languages=["fr","en"];
the()->project->languagesUrls=[
"fr"=>"http://aiko-creative.fr",
"en"=>"http://aiko-creative.com"
];
//force https?
the()->configProjectUrl->forceHttps=false;
// Traductions ui.
// https://docs.google.com/spreadsheets/d/1kefhXt0Z7g0P2cGItQK4k_hqhSoFTMaJyvzNYjKeqw8
// Copiez-collez ce google Sheet pour pouvoir le modifier puis modifiez l'url. Vous pouvez bien entendu utiliser un csv en local mais c'est moins pratique :)
the()->project->config_translations_csv_url="https://docs.google.com/spreadsheets/d/1kefhXt0Z7g0P2cGItQK4k_hqhSoFTMaJyvzNYjKeqw8/export?gid=0&format=csv";
the()->project->config_translations_debug=true; //quand true recharge à chaque fois le CSV

//config options

//Google Map etc...
//site()->googleApiKey="xxxxx";

//Google webmaster tools
the()->htmlLayout()->googleSiteVerification="WHf2o7lr7D-5e0te43zwwx9wNnutozMXyh7hoR355L0";

//Google analytics
site()->googleAnalyticsId="UA-143383281-1";