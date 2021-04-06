<style>

.box-body{

    padding: 0px !important;

}

.showpresent{

    font-size: 12px;

    /* color: #3e9e0f; */

    display: block;

    /* font-weight: bold; */

}

.showabsent{

    font-size: 12px;

    /* color: #ab320d; */

    display: block;

    /* font-weight: bold; */

}

.box.box-primary{

    /* border-top-color: #222533; */

    border-top-color:transparent;

        height: 720px;

}

.products-erp {

    width: 114px;

    float: left;

    margin: 25px 22px;

    height: 114px;

}

.products-erp img{

    border: 2px solid #cccccc;

    border-radius: 12px;

}

.fixed .content-wrapper, .fixed .right-side {

    padding-top: 50px !important;

}

.slideDown{

    animation-name: slideDown;

    -webkit-animation-name: slideDown;  



    animation-duration: 1s; 

    -webkit-animation-duration: 1s;



    animation-timing-function: ease;    

    -webkit-animation-timing-function: ease;    



    visibility: visible !important;                     

}



@keyframes slideDown {

    0% {

        transform: translateY(-100%);

    }

    50%{

        transform: translateY(8%);

    }

    65%{

        transform: translateY(-4%);

    }

    80%{

        transform: translateY(4%);

    }

    95%{

        transform: translateY(-2%);

    }           

    100% {

        transform: translateY(0%);

    }       

}



@-webkit-keyframes slideDown {

    0% {

        -webkit-transform: translateY(-100%);

    }

    50%{

        -webkit-transform: translateY(8%);

    }

    65%{

        -webkit-transform: translateY(-4%);

    }

    80%{

        -webkit-transform: translateY(4%);

    }

    95%{

        -webkit-transform: translateY(-2%);

    }           

    100% {

        -webkit-transform: translateY(0%);

    }   

}



/*

==============================================

slideUp

==============================================

*/





.slideUp{

    animation-name: slideUp;

    -webkit-animation-name: slideUp;    



    animation-duration: 1s; 

    -webkit-animation-duration: 1s;



    animation-timing-function: ease;    

    -webkit-animation-timing-function: ease;



    visibility: visible !important;         

}



@keyframes slideUp {

    0% {

        transform: translateY(100%);

    }

    50%{

        transform: translateY(-8%);

    }

    65%{

        transform: translateY(4%);

    }

    80%{

        transform: translateY(-4%);

    }

    95%{

        transform: translateY(2%);

    }           

    100% {

        transform: translateY(0%);

    }   

}



@-webkit-keyframes slideUp {

    0% {

        -webkit-transform: translateY(100%);

    }

    50%{

        -webkit-transform: translateY(-8%);

    }

    65%{

        -webkit-transform: translateY(4%);

    }

    80%{

        -webkit-transform: translateY(-4%);

    }

    95%{

        -webkit-transform: translateY(2%);

    }           

    100% {

        -webkit-transform: translateY(0%);

    }   

}



/*

==============================================

slideLeft

==============================================

*/





.slideLeft{

    animation-name: slideLeft;

    -webkit-animation-name: slideLeft;  



    animation-duration: 1s; 

    -webkit-animation-duration: 1s;



    animation-timing-function: ease-in-out; 

    -webkit-animation-timing-function: ease-in-out;     



    visibility: visible !important; 

}



@keyframes slideLeft {

    0% {

        transform: translateX(150%);

    }

    50%{

        transform: translateX(-8%);

    }

    65%{

        transform: translateX(4%);

    }

    80%{

        transform: translateX(-4%);

    }

    95%{

        transform: translateX(2%);

    }           

    100% {

        transform: translateX(0%);

    }

}



@-webkit-keyframes slideLeft {

    0% {

        -webkit-transform: translateX(150%);

    }

    50%{

        -webkit-transform: translateX(-8%);

    }

    65%{

        -webkit-transform: translateX(4%);

    }

    80%{

        -webkit-transform: translateX(-4%);

    }

    95%{

        -webkit-transform: translateX(2%);

    }           

    100% {

        -webkit-transform: translateX(0%);

    }

}



/*

==============================================

slideRight

==============================================

*/





.slideRight{

    animation-name: slideRight;

    -webkit-animation-name: slideRight; 



    animation-duration: 1s; 

    -webkit-animation-duration: 1s;



    animation-timing-function: ease-in-out; 

    -webkit-animation-timing-function: ease-in-out;     



    visibility: visible !important; 

}



@keyframes slideRight {

    0% {

        transform: translateX(-150%);

    }

    50%{

        transform: translateX(8%);

    }

    65%{

        transform: translateX(-4%);

    }

    80%{

        transform: translateX(4%);

    }

    95%{

        transform: translateX(-2%);

    }           

    100% {

        transform: translateX(0%);

    }   

}



@-webkit-keyframes slideRight {

    0% {

        -webkit-transform: translateX(-150%);

    }

    50%{

        -webkit-transform: translateX(8%);

    }

    65%{

        -webkit-transform: translateX(-4%);

    }

    80%{

        -webkit-transform: translateX(4%);

    }

    95%{

        -webkit-transform: translateX(-2%);

    }           

    100% {

        -webkit-transform: translateX(0%);

    }

}



/*

==============================================

slideExpandUp

==============================================

*/





.slideExpandUp{

    animation-name: slideExpandUp;

    -webkit-animation-name: slideExpandUp;  



    animation-duration: 1.6s;   

    -webkit-animation-duration: 1.6s;



    animation-timing-function: ease-out;    

    -webkit-animation-timing-function: ease -out;



    visibility: visible !important; 

}



@keyframes slideExpandUp {

    0% {

        transform: translateY(100%) scaleX(0.5);

    }

    30%{

        transform: translateY(-8%) scaleX(0.5);

    }   

    40%{

        transform: translateY(2%) scaleX(0.5);

    }

    50%{

        transform: translateY(0%) scaleX(1.1);

    }

    60%{

        transform: translateY(0%) scaleX(0.9);      

    }

    70% {

        transform: translateY(0%) scaleX(1.05);

    }           

    80%{

        transform: translateY(0%) scaleX(0.95);     

    }

    90% {

        transform: translateY(0%) scaleX(1.02);

    }   

    100%{

        transform: translateY(0%) scaleX(1);        

    }

}



@-webkit-keyframes slideExpandUp {

    0% {

        -webkit-transform: translateY(100%) scaleX(0.5);

    }

    30%{

        -webkit-transform: translateY(-8%) scaleX(0.5);

    }   

    40%{

        -webkit-transform: translateY(2%) scaleX(0.5);

    }

    50%{

        -webkit-transform: translateY(0%) scaleX(1.1);

    }

    60%{

        -webkit-transform: translateY(0%) scaleX(0.9);      

    }

    70% {

        -webkit-transform: translateY(0%) scaleX(1.05);

    }           

    80%{

        -webkit-transform: translateY(0%) scaleX(0.95);     

    }

    90% {

        -webkit-transform: translateY(0%) scaleX(1.02);

    }   

    100%{

        -webkit-transform: translateY(0%) scaleX(1);        

    }

}



/*

==============================================

expandUp

==============================================

*/





.expandUp{

    animation-name: expandUp;

    -webkit-animation-name: expandUp;   



    animation-duration: 0.7s;   

    -webkit-animation-duration: 0.7s;



    animation-timing-function: ease;    

    -webkit-animation-timing-function: ease;        



    visibility: visible !important; 

}



@keyframes expandUp {

    0% {

        transform: translateY(100%) scale(0.6) scaleY(0.5);

    }

    60%{

        transform: translateY(-7%) scaleY(1.12);

    }

    75%{

        transform: translateY(3%);

    }   

    100% {

        transform: translateY(0%) scale(1) scaleY(1);

    }   

}



@-webkit-keyframes expandUp {

    0% {

        -webkit-transform: translateY(100%) scale(0.6) scaleY(0.5);

    }

    60%{

        -webkit-transform: translateY(-7%) scaleY(1.12);

    }

    75%{

        -webkit-transform: translateY(3%);

    }   

    100% {

        -webkit-transform: translateY(0%) scale(1) scaleY(1);

    }   

}



/*

==============================================

fadeIn

==============================================

*/



.fadeIn{

    animation-name: fadeIn;

    -webkit-animation-name: fadeIn; 



    animation-duration: 1.5s;   

    -webkit-animation-duration: 1.5s;



    animation-timing-function: ease-in-out; 

    -webkit-animation-timing-function: ease-in-out;     



    visibility: visible !important; 

}



@keyframes fadeIn {

    0% {

        transform: scale(0);

        opacity: 0.0;       

    }

    60% {

        transform: scale(1.1);  

    }

    80% {

        transform: scale(0.9);

        opacity: 1; 

    }   

    100% {

        transform: scale(1);

        opacity: 1; 

    }       

}



@-webkit-keyframes fadeIn {

    0% {

        -webkit-transform: scale(0);

        opacity: 0.0;       

    }

    60% {

        -webkit-transform: scale(1.1);

    }

    80% {

        -webkit-transform: scale(0.9);

        opacity: 1; 

    }   

    100% {

        -webkit-transform: scale(1);

        opacity: 1; 

    }       

}



/*

==============================================

expandOpen

==============================================

*/





.expandOpen{

    animation-name: expandOpen;

    -webkit-animation-name: expandOpen; 



    animation-duration: 1.2s;   

    -webkit-animation-duration: 1.2s;



    animation-timing-function: ease-out;    

    -webkit-animation-timing-function: ease-out;    



    visibility: visible !important; 

}



@keyframes expandOpen {

    0% {

        transform: scale(1.8);      

    }

    50% {

        transform: scale(0.95);

    }   

    80% {

        transform: scale(1.05);

    }

    90% {

        transform: scale(0.98);

    }   

    100% {

        transform: scale(1);

    }           

}



@-webkit-keyframes expandOpen {

    0% {

        -webkit-transform: scale(1.8);      

    }

    50% {

        -webkit-transform: scale(0.95);

    }   

    80% {

        -webkit-transform: scale(1.05);

    }

    90% {

        -webkit-transform: scale(0.98);

    }   

    100% {

        -webkit-transform: scale(1);

    }                   

}















/*

==============================================

bigEntrance

==============================================

*/





.bigEntrance{

    animation-name: bigEntrance;

    -webkit-animation-name: bigEntrance;    



    animation-duration: 1.6s;   

    -webkit-animation-duration: 1.6s;



    animation-timing-function: ease-out;    

    -webkit-animation-timing-function: ease-out;    



    visibility: visible !important;         

}



@keyframes bigEntrance {

    0% {

        transform: scale(0.3) rotate(6deg) translateX(-30%) translateY(30%);

        opacity: 0.2;

    }

    30% {

        transform: scale(1.03) rotate(-2deg) translateX(2%) translateY(-2%);        

        opacity: 1;

    }

    45% {

        transform: scale(0.98) rotate(1deg) translateX(0%) translateY(0%);

        opacity: 1;

    }

    60% {

        transform: scale(1.01) rotate(-1deg) translateX(0%) translateY(0%);     

        opacity: 1;

    }   

    75% {

        transform: scale(0.99) rotate(1deg) translateX(0%) translateY(0%);

        opacity: 1;

    }

    90% {

        transform: scale(1.01) rotate(0deg) translateX(0%) translateY(0%);      

        opacity: 1;

    }   

    100% {

        transform: scale(1) rotate(0deg) translateX(0%) translateY(0%);

        opacity: 1;

    }       

}



@-webkit-keyframes bigEntrance {

    0% {

        -webkit-transform: scale(0.3) rotate(6deg) translateX(-30%) translateY(30%);

        opacity: 0.2;

    }

    30% {

        -webkit-transform: scale(1.03) rotate(-2deg) translateX(2%) translateY(-2%);        

        opacity: 1;

    }

    45% {

        -webkit-transform: scale(0.98) rotate(1deg) translateX(0%) translateY(0%);

        opacity: 1;

    }

    60% {

        -webkit-transform: scale(1.01) rotate(-1deg) translateX(0%) translateY(0%);     

        opacity: 1;

    }   

    75% {

        -webkit-transform: scale(0.99) rotate(1deg) translateX(0%) translateY(0%);

        opacity: 1;

    }

    90% {

        -webkit-transform: scale(1.01) rotate(0deg) translateX(0%) translateY(0%);      

        opacity: 1;

    }   

    100% {

        -webkit-transform: scale(1) rotate(0deg) translateX(0%) translateY(0%);

        opacity: 1;

    }               

}



/*

==============================================

hatch

==============================================

*/



.hatch{

    animation-name: hatch;

    -webkit-animation-name: hatch;  



    animation-duration: 2s; 

    -webkit-animation-duration: 2s;



    animation-timing-function: ease-in-out; 

    -webkit-animation-timing-function: ease-in-out;



    transform-origin: 50% 100%;

    -ms-transform-origin: 50% 100%;

    -webkit-transform-origin: 50% 100%; 



    visibility: visible !important;     

}



@keyframes hatch {

    0% {

        transform: rotate(0deg) scaleY(0.6);

    }

    20% {

        transform: rotate(-2deg) scaleY(1.05);

    }

    35% {

        transform: rotate(2deg) scaleY(1);

    }

    50% {

        transform: rotate(-2deg);

    }   

    65% {

        transform: rotate(1deg);

    }   

    80% {

        transform: rotate(-1deg);

    }       

    100% {

        transform: rotate(0deg);

    }                                   

}



@-webkit-keyframes hatch {

    0% {

        -webkit-transform: rotate(0deg) scaleY(0.6);

    }

    20% {

        -webkit-transform: rotate(-2deg) scaleY(1.05);

    }

    35% {

        -webkit-transform: rotate(2deg) scaleY(1);

    }

    50% {

        -webkit-transform: rotate(-2deg);

    }   

    65% {

        -webkit-transform: rotate(1deg);

    }   

    80% {

        -webkit-transform: rotate(-1deg);

    }       

    100% {

        -webkit-transform: rotate(0deg);

    }       

}





/*

==============================================

bounce

==============================================

*/





.bounce{

    animation-name: bounce;

    -webkit-animation-name: bounce; 



    animation-duration: 1.6s;   

    -webkit-animation-duration: 1.6s;



    animation-timing-function: ease;    

    -webkit-animation-timing-function: ease;    

    

    transform-origin: 50% 100%;

    -ms-transform-origin: 50% 100%;

    -webkit-transform-origin: 50% 100%;     

}



@keyframes bounce {

    0% {

        transform: translateY(0%) scaleY(0.6);

    }

    60%{

        transform: translateY(-100%) scaleY(1.1);

    }

    70%{

        transform: translateY(0%) scaleY(0.95) scaleX(1.05);

    }

    80%{

        transform: translateY(0%) scaleY(1.05) scaleX(1);

    }   

    90%{

        transform: translateY(0%) scaleY(0.95) scaleX(1);

    }               

    100%{

        transform: translateY(0%) scaleY(1) scaleX(1);

    }   

}



@-webkit-keyframes bounce {

    0% {

        -webkit-transform: translateY(0%) scaleY(0.6);

    }

    60%{

        -webkit-transform: translateY(-100%) scaleY(1.1);

    }

    70%{

        -webkit-transform: translateY(0%) scaleY(0.95) scaleX(1.05);

    }

    80%{

        -webkit-transform: translateY(0%) scaleY(1.05) scaleX(1);

    }   

    90%{

        -webkit-transform: translateY(0%) scaleY(0.95) scaleX(1);

    }               

    100%{

        -webkit-transform: translateY(0%) scaleY(1) scaleX(1);

    }       

}





/*

==============================================

pulse

==============================================

*/



.pulse{

    animation-name: pulse;

    -webkit-animation-name: pulse;  



    animation-duration: 1.5s;   

    -webkit-animation-duration: 1.5s;



    animation-iteration-count: infinite;

    -webkit-animation-iteration-count: infinite;

}



@keyframes pulse {

    0% {

        transform: scale(0.9);

        opacity: 0.7;       

    }

    50% {

        transform: scale(1);

        opacity: 1; 

    }   

    100% {

        transform: scale(0.9);

        opacity: 0.7;   

    }           

}



@-webkit-keyframes pulse {

    0% {

        -webkit-transform: scale(0.95);

        opacity: 0.7;       

    }

    50% {

        -webkit-transform: scale(1);

        opacity: 1; 

    }   

    100% {

        -webkit-transform: scale(0.95);

        opacity: 0.7;   

    }           

}



/*

==============================================

floating

==============================================

*/



.floating{

    animation-name: floating;

    -webkit-animation-name: floating;



    animation-duration: 1.5s;   

    -webkit-animation-duration: 1.5s;



    animation-iteration-count: infinite;

    -webkit-animation-iteration-count: infinite;

}



@keyframes floating {

    0% {

        transform: translateY(0%);  

    }

    50% {

        transform: translateY(8%);  

    }   

    100% {

        transform: translateY(0%);

    }           

}



@-webkit-keyframes floating {

    0% {

        -webkit-transform: translateY(0%);  

    }

    50% {

        -webkit-transform: translateY(8%);  

    }   

    100% {

        -webkit-transform: translateY(0%);

    }           

}



/*

==============================================

tossing

==============================================

*/



.tossing{

    animation-name: tossing;

    -webkit-animation-name: tossing;    



    animation-duration: 2.5s;   

    -webkit-animation-duration: 2.5s;



    animation-iteration-count: infinite;

    -webkit-animation-iteration-count: infinite;

}



@keyframes tossing {

    0% {

        transform: rotate(-4deg);   

    }

    50% {

        transform: rotate(4deg);

    }

    100% {

        transform: rotate(-4deg);   

    }                       

}



@-webkit-keyframes tossing {

    0% {

        -webkit-transform: rotate(-4deg);   

    }

    50% {

        -webkit-transform: rotate(4deg);

    }

    100% {

        -webkit-transform: rotate(-4deg);   

    }               

}



/*

==============================================

pullUp

==============================================

*/



.pullUp{

    animation-name: pullUp;

    -webkit-animation-name: pullUp; 



    animation-duration: 1.1s;   

    -webkit-animation-duration: 1.1s;



    animation-timing-function: ease-out;    

    -webkit-animation-timing-function: ease-out;    



    transform-origin: 50% 100%;

    -ms-transform-origin: 50% 100%;

    -webkit-transform-origin: 50% 100%;         

}



@keyframes pullUp {

    0% {

        transform: scaleY(0.1);

    }

    40% {

        transform: scaleY(1.02);

    }

    60% {

        transform: scaleY(0.98);

    }

    80% {

        transform: scaleY(1.01);

    }

    100% {

        transform: scaleY(0.98);

    }               

    80% {

        transform: scaleY(1.01);

    }

    100% {

        transform: scaleY(1);

    }                           

}



@-webkit-keyframes pullUp {

    0% {

        -webkit-transform: scaleY(0.1);

    }

    40% {

        -webkit-transform: scaleY(1.02);

    }

    60% {

        -webkit-transform: scaleY(0.98);

    }

    80% {

        -webkit-transform: scaleY(1.01);

    }

    100% {

        -webkit-transform: scaleY(0.98);

    }               

    80% {

        -webkit-transform: scaleY(1.01);

    }

    100% {

        -webkit-transform: scaleY(1);

    }       

}



/*

==============================================

pullDown

==============================================

*/



.pullDown{

    animation-name: pullDown;

    -webkit-animation-name: pullDown;   



    animation-duration: 1.1s;   

    -webkit-animation-duration: 1.1s;



    animation-timing-function: ease-out;    

    -webkit-animation-timing-function: ease-out;    



    transform-origin: 50% 0%;

    -ms-transform-origin: 50% 0%;

    -webkit-transform-origin: 50% 0%;       

}



@keyframes pullDown {

    0% {

        transform: scaleY(0.1);

    }

    40% {

        transform: scaleY(1.02);

    }

    60% {

        transform: scaleY(0.98);

    }

    80% {

        transform: scaleY(1.01);

    }

    100% {

        transform: scaleY(0.98);

    }               

    80% {

        transform: scaleY(1.01);

    }

    100% {

        transform: scaleY(1);

    }                           

}



@-webkit-keyframes pullDown {

    0% {

        -webkit-transform: scaleY(0.1);

    }

    40% {

        -webkit-transform: scaleY(1.02);

    }

    60% {

        -webkit-transform: scaleY(0.98);

    }

    80% {

        -webkit-transform: scaleY(1.01);

    }

    100% {

        -webkit-transform: scaleY(0.98);

    }               

    80% {

        -webkit-transform: scaleY(1.01);

    }

    100% {

        -webkit-transform: scaleY(1);

    }       

}



/*

==============================================

stretchLeft

==============================================

*/



.stretchLeft{

    animation-name: stretchLeft;

    -webkit-animation-name: stretchLeft;    



    animation-duration: 1.5s;   

    -webkit-animation-duration: 1.5s;



    animation-timing-function: ease-out;    

    -webkit-animation-timing-function: ease-out;    



    transform-origin: 100% 0%;

    -ms-transform-origin: 100% 0%;

    -webkit-transform-origin: 100% 0%; 

}



@keyframes stretchLeft {

    0% {

        transform: scaleX(0.3);

    }

    40% {

        transform: scaleX(1.02);

    }

    60% {

        transform: scaleX(0.98);

    }

    80% {

        transform: scaleX(1.01);

    }

    100% {

        transform: scaleX(0.98);

    }               

    80% {

        transform: scaleX(1.01);

    }

    100% {

        transform: scaleX(1);

    }                           

}



@-webkit-keyframes stretchLeft {

    0% {

        -webkit-transform: scaleX(0.3);

    }

    40% {

        -webkit-transform: scaleX(1.02);

    }

    60% {

        -webkit-transform: scaleX(0.98);

    }

    80% {

        -webkit-transform: scaleX(1.01);

    }

    100% {

        -webkit-transform: scaleX(0.98);

    }               

    80% {

        -webkit-transform: scaleX(1.01);

    }

    100% {

        -webkit-transform: scaleX(1);

    }       

}



/*

==============================================

stretchRight

==============================================

*/



.stretchRight{

    animation-name: stretchRight;

    -webkit-animation-name: stretchRight;   



    animation-duration: 1.5s;   

    -webkit-animation-duration: 1.5s;



    animation-timing-function: ease-out;    

    -webkit-animation-timing-function: ease-out;    



    transform-origin: 0% 0%;

    -ms-transform-origin: 0% 0%;

    -webkit-transform-origin: 0% 0%;        

}



@keyframes stretchRight {

    0% {

        transform: scaleX(0.3);

    }

    40% {

        transform: scaleX(1.02);

    }

    60% {

        transform: scaleX(0.98);

    }

    80% {

        transform: scaleX(1.01);

    }

    100% {

        transform: scaleX(0.98);

    }               

    80% {

        transform: scaleX(1.01);

    }

    100% {

        transform: scaleX(1);

    }                           

}



@-webkit-keyframes stretchRight {

    0% {

        -webkit-transform: scaleX(0.3);

    }

    40% {

        -webkit-transform: scaleX(1.02);

    }

    60% {

        -webkit-transform: scaleX(0.98);

    }

    80% {

        -webkit-transform: scaleX(1.01);

    }

    100% {

        -webkit-transform: scaleX(0.98);

    }               

    80% {

        -webkit-transform: scaleX(1.01);

    }

    100% {

        -webkit-transform: scaleX(1);

    }       

}





.one {

-webkit-animation-delay: 0s;

-moz-animation-delay: 0s;

animation-delay: 0s;

}



.two {

-webkit-animation-delay: .2s;

-moz-animation-delay:.2s;

animation-delay: .2s;

}



.three {

-webkit-animation-delay: .4s;

-moz-animation-delay: .4s;

animation-delay: .4s;

}



.four {

-webkit-animation-delay: .6s;

-moz-animation-delay: .6s;

animation-delay: .6s;

}



.five {

-webkit-animation-delay: .8s;

-moz-animation-delay:.8s;

animation-delay: .8s;

}



.six {

-webkit-animation-delay: 1s;

-moz-animation-delay: 1s;

animation-delay: 1s;

}



.seven { -webkit-animation-delay: 1.2s;

-moz-animation-delay: 1.2s;

animation-delay: 1.2s;

}

</style>

<div class="content-wrapper" style="min-height: 946px;">

    <section class="content">

        <div class="row">



            <div class="col-md-12">

                <div class="row">

                    

                    <div class="col-md-12 col-sm-12">  

                     

                     <div class="box box-primary">

                    <div class="box-header with-border">

                        <h3 class="box-title">Management Modules</h3>

                    </div>

            <div class="box-body">          



<div class="col-md-12">



            <?php

                if ($this->module_lib->hasActive('front_cms')) {

                     if (($this->rbac->hasPrivilege('event', 'can_view') ||

                             $this->rbac->hasPrivilege('gallery', 'can_view') ||

                              $this->rbac->hasPrivilege('notice', 'can_view') ||

                               $this->rbac->hasPrivilege('media_manager', 'can_view') ||

                                $this->rbac->hasPrivilege('pages', 'can_view') ||

                                 $this->rbac->hasPrivilege('menus', 'can_view') || 

                                 $this->rbac->hasPrivilege('banner_images', 'can_view'))) {

                                        ?>

                    <div class="products-erp fadeIn four">

                <a href="<?php echo base_url('manager/frontcmsmanager'); ?>">

                <img src="<?php echo base_url('backend/images/dashboard/'); ?>front-cms-manager.png">

                </a>

            </div>

                                        <?php

                     }

                }

                            if ($this->module_lib->hasActive('reports')) {
                     if (($this->rbac->hasPrivilege('transaction_report', 'can_view') ||
                             $this->rbac->hasPrivilege('user_log', 'can_view') )) {
                        
                                        ?>
                    <div class="products-erp fadeIn four">
                <a href="<?php echo base_url('manager/reportmanager'); ?>">
                <img src="<?php echo base_url('backend/images/dashboard/'); ?>report-manager.png">
                </a>
            </div>
                                        <?php
                     }
                }


            ?>



            <?php

                if ($this->module_lib->hasActive('system_settings')) {

                     if (($this->rbac->hasPrivilege('general_setting', 'can_edit') ||

                             $this->rbac->hasPrivilege('session_setting', 'can_view') ||

                              $this->rbac->hasPrivilege('notification_setting', 'can_edit') ||

                               $this->rbac->hasPrivilege('sms_setting', 'can_edit') ||

                                $this->rbac->hasPrivilege('email_setting', 'can_edit') ||

                                 $this->rbac->hasPrivilege('payment_methods', 'can_edit') ||

                                  $this->rbac->hasPrivilege('languages', 'can_view') ||

                                   $this->rbac->hasPrivilege('languages', 'can_add') ||

                                    $this->rbac->hasPrivilege('backup_restore', 'can_view') ||

                                     $this->rbac->hasPrivilege('front_cms_setting', 'can_edit'))) {

                        

                                        ?>

                    <div class="products-erp fadeIn four">

                <a href="<?php echo base_url('manager/systemsettingmanager'); ?>">

                <img src="<?php echo base_url('backend/images/dashboard/'); ?>setting-manager.png">

                </a>

            </div>

                                        <?php

                     }

                }

            ?>

</div>



    </div>

            </div>

                                     

                    </div>

                </div>   

            </div>



        </div>

</section>

</div>

