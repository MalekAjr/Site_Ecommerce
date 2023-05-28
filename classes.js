var p=[];

window.onload=function(){
    var imgs=["url('assets/images/image1.jpg')","url('assets/images/image3.jpg","url('assets/images/image4.jpg","url('assets/images/image3.jpg"];
    var imgs1=["url('assets/images/image6.jpg')","url('assets/images/image7.jpg')","url('assets/images/image5.jpg')","url('assets/images/image8.jpg')"];
    var imgs2=["url('assets/images/homme/pantalonhomme1.jpg')","url('assets/images/homme/pantalonhomme2.jpg')","url('assets/images/homme/shirt1.jpg')","url('assets/images/homme/shirt2.jpg')"];
    
    image= document.querySelector('.mm');
    image1= document.querySelector('.nn');
    image2= document.querySelector('.kk');

    index=0;
    function hop(){
        image.style.background=imgs[(index++)%imgs.length];
        image.style.backgroundSize='cover';
        image1.style.background=imgs1[(index++)%imgs1.length];
        image1.style.backgroundSize='cover';
        image2.style.background=imgs2[(index++)%imgs2.length];
        image2.style.backgroundSize='cover';

    };
    cool=setInterval(hop,3000);
    //clearInterval(cool);
}

/*
window.onload=function(){
    var imgs=["url('assets/images/image1.jpg')","url('assets/images/image3.jpg')","url('assets/images/image4.jpg')","url('assets/images/image5.jpg')"];
    var imgs1=["url('assets/images/image6.jpg')","url('assets/images/image7.jpg')","url('assets/images/class1.jpg')","url('assets/images/class2.jpg')"];
    var imgs2=["url('assets/images/homme/pantalonhomme1.jpg')","url('assets/images/homme/pantalonhomme2.jpg')","url('assets/images/homme/shirt1.jpg')","url('assets/images/homme/shirt.jpg')"];
    var imgs3=["url('assets/images/homme/shoes1.jpg')","url('assets/images/homme/shoes2.jpg')","url('assets/images/homme/shoes4.jpg')","url('assets/images/homme/shoes3.jpg')"];
    image= document.querySelector('.mm');
    image1= document.querySelector('.nn');
    image2= document.querySelector('.kk');
    image3= document.querySelector('.oo');
    index=0;
    function hop(){
        image.style.background=imgs[(index++)%imgs.length];
        image.style.backgroundSize='cover';
        image1.style.background=imgs1[(index++)%imgs1.length];
        image1.style.backgroundSize='cover';
        image2.style.background=imgs2[(index++)%imgs2.length];
        image2.style.backgroundSize='cover';
        image3.style.background=imgs3[(index++)%imgs3.length];
        image3.style.backgroundSize='cover';
    };
    cool=setInterval(hop,3000);
    //clearInterval(cool);
}

/*
/*
window.onload=function(){
    var imgs=["url('assets/images/image1.jpg')","url('assets/images/image3.jpg","url('assets/images/image4.jpg","url('assets/images/image3.jpg"];
    
    image= document.querySelector('.oo');
  
    index=0;
    function hop(){
        image.style.background=imgs[(index++)%imgs.length];
        image.style.backgroundSize='cover';
        
    };
    cool=setInterval(hop,3000);
    //clearInterval(cool);
}
************/

var img_array = ['assets/images/homme/shoes1.jpg', 'assets/images/homme/shoes2.jpg','assets/images/homme/shoes3.jpg','assets/images/homme/shoes4.jpg'];
i = 0;

function myFunction() {
    i++;
    document.getElementById("myImg").src = img_array[i];
    if (i == img_array.length - 1) {
        i = -1;

    }

}
