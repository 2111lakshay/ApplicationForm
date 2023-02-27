$(document).ready(function(){
  var juniorOptions = {
      Science: "Science",
      Commerce: "Commece"
  };
  var ugOptions = {
      BSc: "BSC",
      BComm: "BCOMM",
    };
    var pgOptions = {
      MSc: "MSC",
      MComm: "MCOMM",
    };
      var semIV = {
      1: "I",
      2: "II",
      3: "III",
      4: "IV",
    };
    var semVI = {
      1: "I",
      2: "II",
      3: "III",
      4: "IV",
      5: "V",
      6: "VI",
    };
  
  $("#level").change(function(){
      $("#course").empty(); //refreshes option
      var level = $("#level").find(":selected").val();//get value
      //console.log(level);
      
      if(level=="junior"){
          $.each(juniorOptions, function(key,value){   //each for loop for Sci and Comm
              $option = $("<option></option>").attr("value",value).text(key); //fetch value and changes value 
              $("#course").append($option);
          });
      }
      else if(level=="ug"){
          $.each(ugOptions, function(key,value){   
              $option = $("<option></option>").attr("value",value).text(key); //fetch value and changes value 
              $("#course").append($option);
          });
      }
      else if(level=="pg"){
          $.each(pgOptions, function(key,value){   
              $option = $("<option></option>").attr("value",value).text(key); //fetch value and changes value 
              $("#course").append($option);
          });
      }
      
  });
  
  
  });