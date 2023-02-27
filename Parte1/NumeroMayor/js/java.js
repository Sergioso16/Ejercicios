var x= document.getElementById("x");
var y = document.getElementById("y");
var z = document.getElementById("z");
var a = document.getElementById("a");

function Calcular(){
if(x.value>y.value){
    if(x.value>z.value){
        if(x.value>a.value){
            alert("X es el numero mayor")
        }
    }
}
else{
    if(y.value>z.value){
        if(y.value>a.value){
            alert("Y es la variable mayor")
        }
    }
    else{
        if(z>a){
            if(z.value>x.value){
                alert("Z es la variable mayor")
            }
        }
        else{
            if(a.value>y.value){
                if(a.value>x.value){
                    alert("A es la variable mayor")
                }
            }
        }
    }
}

}
function Limpiar(){
    x.value = "";
    y.value = "";
    z.value = "";
    a.value = "";
}

