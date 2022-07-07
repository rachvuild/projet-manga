const headerActive = document.querySelector('#check')
const activeHeader = document.querySelector('#active-header')


headerActive.addEventListener("click", () => {
    
    console.log('polpol')
    
    activeHeader.classList.toggle("position-start");
}); 



const modActive = document.querySelector('#mod-active')
let mod = document.querySelector('#mod-start')


modActive.addEventListener("click", () => {

    console.log('22');
    mod.classList.toggle("start");

});

 



// var app = {
//     init: function () {
//       document.getElementById('header-active').addEventListener("click",app.switchMode)
//     },
//     switchMode: function () {
//       let headerActive = document.querySelector('#header-active')
//       const activeHeader = document.querySelector('#active-header')
      
  
//       activeHeader.classList.toggle("position-start");
     
//   console.log('polpol')
//     },

// }