function setCookie(cname,cvalue) {
    
    document.cookie = cname+"="+cvalue;
}
function set_default()
{
    setCookie("catagory","%");
    setCookie("engine","%");
    setCookie("type","%");
    setCookie("val1","34");
    setCookie("val2","100");
}
function perfomance()
{
    setCookie("catagory","perform");
}
function economy()
{
    setCookie("catagory","economy");
}
function petrol()
{
    setCookie("engine","petrol");
}
function diesel()
{
    setCookie("engine","diesel");
}
function hybrid()
{
    setCookie("engine","hybrid");
}
function electric()
{
    setCookie("engine","electric");
}
function hatch()
{
    setCookie("type","hatch");
}
function sedan()
{
    setCookie("type","sedan");
}
function suv()
{
    setCookie("type","suv");
}
function supercar()
{
    setCookie("type","supercar");
}

set_default();
