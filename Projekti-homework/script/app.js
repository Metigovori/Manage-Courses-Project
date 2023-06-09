const container = document.querySelector(".img-container");
const buttons = document.querySelectorAll(".slide");



let fotot = ["images/react-js-training-in-chennai.jpg","images/react-js-training-course-in-chandigarh-min..jpg","images/training-banner.jpg"]


let counter = 0;

container.style.background = `url('images/react.jpg') center/cover no-repeat   `;


buttons.forEach((button) => {
    button.addEventListener('click', () => {
         if (button.classList.contains('slide-left')) {
            counter --;
           if (counter < 0) {
            counter = fotot.length -1
           }
           container.style.background = `url('${fotot[counter]}') center/cover  no-repeat`;
           
        }

        if (button.classList.contains('slide-right')) {
            counter ++;
            if (counter > fotot.length -1) {
                counter = 0
                
            }
           container.style.background = `url('${fotot[counter]}') center/cover  no-repeat   `;
           
            
        }
     
     })})

     let nurses = [{
        name:'dea',
        age:38
     },
     {
        name:'learta',
        age:42
     },
     {
        name:'mrika',
        age:58
     },]


    