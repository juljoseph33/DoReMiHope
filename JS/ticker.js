$(document).ready(function(){
  var shown = 1;
  $("#2").toggle();
  $("#3").toggle();
  $("#4").toggle();
  $("#5").toggle();
  $("#next").click(function(){
    if(shown == 5) {
        $('#5').toggle();
        $('#1').toggle("slow");
        shown = 0;
  	};
    if(shown == 4) {
        $('#4').toggle();
        $('#5').toggle("slow");
        shown = 5;
    };
    if(shown == 3) {
        $('#3').toggle();
        $('#4').toggle("slow");
        shown = 4;
        }; 
    if(shown == 2) {
        $('#2').toggle();
        $('#3').toggle("slow");
        shown = 3;
    }; 
    if(shown == 1) {
        $('#1').toggle();
        $('#2').toggle("slow");
        shown= 2;
    }; 
    if(shown == 0) {
      shown=1;
    };
     /* This was needed to stop the site from processing shown==1 after being on 5. It was skipping #1, but this way it will not process that shown==1 until the next click. */   
  });
  $("#previous").click(function(){
    if(shown == 1) {
        $('#1').toggle();
        $('#5').toggle("slow");
        shown = 0;
  	};
    if(shown == 2) {
        $('#2').toggle();
        $('#1').toggle("slow");
        shown = 1;
    };
    if(shown == 3) {
        $('#3').toggle();
        $('#2').toggle("slow");
        shown = 2;
        }; 
    if(shown == 4) {
        $('#4').toggle();
        $('#3').toggle("slow");
        shown = 3;
    }; 
    if(shown == 5) {
        $('#5').toggle();
        $('#4').toggle("slow");
        shown= 4;
    }; 
    if(shown == 0) {
      shown=5;
    };
  });
});
