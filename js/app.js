// Place third party dependencies in the lib folder
//
// Configure loading modules from the lib directory,
// except 'app' ones, 
requirejs.config({
    "baseUrl": "/js/",
    "paths": {
      "app": "app",
	  "bootstrap": "lib/vendor/bootstrap.min",
	  "colorbox-min":"lib/jquery.colorbox-min",
	  "vegas":"lib/vegas/jquery.vegas",
	  "resizestop":"lib/jquery.resizestop"
    },
	"shim": {
		"vegas": ["jquery"],
		"colorbox-min": ["jquery"],
		"resizestop": ["jquery"],
		"bootstrap": {
            deps: ["jquery"]
        }
	}
});

// Load the main app module to start the app
requirejs(["app/main"]);
