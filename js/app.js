var i=0;
var n=i;
console.log("Tabla del",n);
for(var i=1; i<11; i++){
  console.log(n+"x"+i+"="+n*i);
}

var vct=[1,9];
if(vct[0]>[1]){
  console.log("Pruebe a operar otro valor");
}else {
  for(var i=vct[0]; i<=vct[1]; i++){
    console.log("Tabla del",i);
    for(var x=1; x<11; x++){
      console.log(i+"x"+x+"="+i*x);
    }
  }
}