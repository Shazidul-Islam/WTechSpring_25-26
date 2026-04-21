
console.log("HTML Page Are Connected");
//alert("HTML Page Are Connected");
var a = 120; 
let b = 245.98756466;
let c = a+b;
console.log("Sum of C", c);

if(a<0)
{
    a++;
    c-a;
    b=a;
    console.log(b);
}
else if(a>0 && a<150)
{
    b++;
    console.log(b);
}
var name= "AIUB";
var name = 'BUET';
console.log(name);
let i=0;
for(i=0; i<10;i++)
{
    console.log(i);
}

function collect_name()
{
    let name = document.getElementById("PatientName").value;
    console.log(name);
    if(name =="")
    {
        document.getElementById("NameError").innerHTML="Name Can Not Be Empty";
        return true;
    }
    else if(name.length<5)
    {
        document.getElementById("NameError").innerHTML="Name Can not be less than 5";
        return true;
    }

    return true;
}

function collect_age()
{
    let Page= document.getElementById("Age").value;
    console.log(Page);
    if(Page=="")
    {
        document.getElementById("AgeError").innerHTML="Age Can Not Be Empty";
        return true;
    }
    


    return true;
}



function collect_data()
{
   
    let isnamevalid = collect_name();
    let isagevalid= collect_age();


    // let Page= document.getElementById("Age").value;
    // console.log(Page);

    // let dob= document.getElementById("DOB").value;
    // alert(dob);

//   let Pname = document.getElementById("PatientName");
//     // console.log(Pname);

//     var para1 = document.getElementById("demo").value;
//     para1.innerHTML="Hello Patient: " + Pname.value;

//     return false;

    return false;
}

console.log("Connected");
let clickcount =0;

var a = ["ABC", "DEF"];
a.forEach((item,index)=>{
    console.log("Index:", index, "Item: ", item);
})
a.map((item, index)=>{
    console.log("Index:", index, "Item: ", item);
})
function get_name()
{
    let paname = document.getElementById("PatientName").value;
    document.getElementById("paname").style.color="red";
    console.log(paname);
    return false;
}
function get_age()
{
    let page= document.getElementById("Age").value;
    document.getElementById("page").style.color="red";
    console.log(page);
    return false;
}
function get_textarea()
{
    let paddress= document.getElementById("Address").value;
    console.log(paddress);
    return false;
}

function collect_data()
{
    clickcount++;
    let submit = document.getElementById("submitdata").value;
    document.getElementById("submitdata").style.color="red";
    document.getElementById("submitdata").innerHTML="Data Submit: "+clickcount;

    return false;
}
