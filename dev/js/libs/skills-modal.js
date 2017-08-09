$(function(){
  $('#container__tech .grid-1-3').on('click', function(e){
    e.preventDefault();

    var clicked = $(this).attr('id');

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "xml/skills-data.xml", false);
    xhr.send();
    var xml = xhr.responseXML;
    var clickedSkill;

    clickedSkill = ($(xml).find('skill[id="'+clicked+'"]'));

    $(xml).find('skill[id="'+clicked+'"]')
    {
      var name = clickedSkill.find('name').text();
      var image = clickedSkill.find('image').text();
      var desc = clickedSkill.find('desc').text();
      var exp = clickedSkill.find('exp').text();
      var env = clickedSkill.find('env').text();
      var projects = clickedSkill.find('projects').text();
      $('.skills-modal h1').html(name);
      $('.skills-modal .skill-img').attr('src', image);
      $('.skills-modal .exp').html('<strong>Years of experience</strong>: ' + exp);
      $('.skills-modal .env').html('<strong>Environment</strong>: ' + env);
      $('.skills-modal .desc').html(desc);
      $('.skills-modal .projects').html('<p><strong>Projects: </strong></p>' + projects);
      $('.skills-modal').fadeIn();
    };
  });
  $('.skills-modal .close').on('click', function(e){
    e.preventDefault();
    $('.skills-modal').fadeOut();
  });
});
