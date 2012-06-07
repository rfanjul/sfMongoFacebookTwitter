// Filename: views/home/main
define([
  'jquery',
  'underscore',
  'backbone',
  'text!templates/home/quorra.html'
], function($, _, Backbone, quorraTemplate){

  var quorraView = Backbone.View.extend({
    el: $("#page"),
    render: function(){
      this.el.html(quorraTemplate);
    }
  });
  return new quorraView;
});
