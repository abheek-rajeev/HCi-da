function storelocator()
{
    var loc=document.getElementById("location");
    var val = loc.value;
    console.log(val);
    if(val=="chennai")
    {
        document.getElementById("first-img").src="images/interior.webp";
        document.getElementById("second-img").src="images/interior2.webp";
    }
    if(val=="mumbai")
    {
        document.getElementById("first-img").src="images/res2-int1.jpg";
        document.getElementById("second-img").src="images/res2-int2.jpg";
    }
}