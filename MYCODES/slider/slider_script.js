let flag = 0;
let flag1=0;
var time=3000;
function controller(x)
{
	flag=flag+x;
	slideshow(flag);
}
slideshowmain();

function slideshowmain()
{
	let slides=document.getElementsByClassName('slide');
	for(let i of slides)
	{
		i.style.display="none";
	}
	slides[flag1].style.display="block";
	if(flag1<slides.length-1)
	{
		flag1++;
	}
	else
	{
		flag1=0;
	}
	flag=flag1-1;
	setTimeout("slideshowmain(flag1)",time);
}
//window.onload=slideshowmain;
function slideshow(num)
{
	let slides=document.getElementsByClassName('slide');
	if(num==slides.length)
	{
		flag=0;
		num=0;
	}
	if(num<0)
	{
		flag=slides.length-1;
		num=slides.length-1;
	}
	flag1=num;
	for(let i of slides)
	{
		i.style.display="none";
	}
	slides[num].style.display="block";
}