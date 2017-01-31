$(document).ready(function(){

  $('.add-file1').on('click', function(e){
    if ($('.filegroup2').hasClass('hidden')){
      $('.filegroup2').removeClass('hidden');
    } else if ($('.filegroup3').hasClass('hidden')){
      $('.filegroup3').removeClass('hidden');
    } else if ($('.filegroup4').hasClass('hidden')){
      $('.filegroup4').removeClass('hidden');
    } else if ($('.filegroup5').hasClass('hidden')){
      $('.filegroup5').removeClass('hidden');
      $('.add-file1').addClass('hidden');
      $('.add-file2').removeClass('hidden');
    }
  });

  $('.add-file2').on('click', function(e){
    if ($('.filegroup6').hasClass('hidden')){
      $('.filegroup6').removeClass('hidden');
    } else if ($('.filegroup7').hasClass('hidden')){
      $('.filegroup7').removeClass('hidden');
    } else if ($('.filegroup8').hasClass('hidden')){
      $('.filegroup8').removeClass('hidden');
    } else if ($('.filegroup9').hasClass('hidden')){
      $('.filegroup9').removeClass('hidden');
    } else if ($('.filegroup10').hasClass('hidden')){
      $('.filegroup10').removeClass('hidden');
      $('.add-file2').addClass('hidden');
    }
  });

  $("form[name='apply']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        nom: "required",
        classe: "required",
        ecole: "required",
        prenom: "required",
        email: {
          required: true,
          email: true
        },
        numero: {
          required: true,
          minlength: 10
        },
        file1: {
          required: true,
          extension: "jpg|png|jpeg"
        },
        file2: {
          extension: "jpg|png|jpeg"
        },
        file3: {
          extension: "jpg|png|jpeg"
        },
        file4: {
          extension: "jpg|png|jpeg"
        },
        file5: {
          extension: "jpg|png|jpeg"
        },
        file6: {
          extension: "jpg|png|jpeg"
        },
        file7: {
          extension: "jpg|png|jpeg"
        },
        file8: {
          extension: "jpg|png|jpeg"
        },
        file9: {
          extension: "jpg|png|jpeg"
        },
        file10: {
          extension: "jpg|png|jpeg"
        }
      },
      // Specify validation error messages
      messages: {
        nom: "Votre nom",
        prenom: "Votre prénom",
        classe: "Votre classe",
        ecole: "Votre école",
        numero: {
          required: "Votre téléphone",
          minlength: "Au moins 10 chiffres!"
        },
        email: "Un e-mail valide",
        file1: "jpg ou png, 1.5M max",
        file2: "jpg ou png, 1.5M max",
        file3: "jpg ou png, 1.5M max",
        file4: "jpg ou png, 1.5M max",
        file5: "jpg ou png, 1.5M max",
        file6: "jpg ou png, 1.5M max",
        file7: "jpg ou png, 1.5M max",
        file8: "jpg ou png, 1.5M max",
        file9: "jpg ou png, 1.5M max",
        file10: "jpg ou png, 1.5M max"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
})
