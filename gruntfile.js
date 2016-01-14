module.exports = function(grunt)
{

grunt.initConfig({
  concat: {
    options: {
      separator: '/*__________________________________________________________*/',
    },
    js: {
      src: ["js/jquery.mixitup.js","js/bootstrap.js","js/modernizr.custom.js","js/jquery.bxslider.js","js/jquery.cslider.js","js/jquery.placeholder.js","js/jquery.inview.js","js/respond.min.js","js/jquery.nicescroll.js"],
      dest: 'build/script.js',
    },
	css: {
      src: ["css/bootstrap.css","css/bootstrap-responsive.css","css/theme.css","css/ie7.css","css/jquery.cslider.css","css/jquery.bxslider.css","css/animate.css","css/preloader.css","css/font-awesome.min.css","css/style.css"],
      dest: 'build/style.css',
    },
	
	
	
  },
});

grunt.loadNpmTasks('grunt-contrib-concat');







};