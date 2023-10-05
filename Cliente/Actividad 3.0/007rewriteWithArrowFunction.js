"use strict";
/*Reemplace las expresiones de función con funciones de flecha en el código a continuación: */
/*
function ask(question, yes, no) {

    if (confirm(question)) yes();
  
    else no();
  
  }
  
  ask(
  
    "Do you agree?",
  
    function() { alert("You agreed."); },
  
    function() { alert("You canceled the execution."); }
  
  );*/
  
  let ask = (question, yes, no) => {
    if (confirm(question)) yes();//Ejecutamos yes si la respuesta es afirmativa.
    else no(); //Ejecutamos no si la respuesta es negativa.
};
// Se llama a la función ask con la pregunta "Do you agree?" y dos funciones de flecha como argumentos.
ask(
    "Do you agree?",
    () => { alert("You agreed."); },
    () => { alert("You canceled the execution."); }
);
