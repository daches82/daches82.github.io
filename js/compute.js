function compute(){
	var ind=0;
			var xanth=0;
			var kyn3oh=0;
			var chlorokyn=0;
			var anthacid=0;
			var pr2,pr3,pr4,pr5=0;
			var outt=0;
			var result=0;		
			ind=document.getElementById("ind").value;
			xanth=document.getElementById("xanth").value;
			anthacid=document.getElementById("anthacid").value;
			kyn3oh=document.getElementById("kyn3oh").value;
			chlorokyn=document.getElementById("chlorokyn").value;
			outt=document.getElementById("out_pr");
			ind=Number(ind);
			xanth=Number(xanth);
			chlorokyn=Number(chlorokyn);
			kyn3oh=Number(kyn3oh);
			anthacid=Number(anthacid);

			pr2=Math.exp(2.45+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn)/(1+Math.exp(2.45+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn));


			pr3=Math.exp(0.93+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn)/(1+Math.exp(0.93+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn));

			pr4=Math.exp(-1.59+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn)/(1+Math.exp(-1.59+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn));

			pr5=Math.exp(-2.14+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn)/(1+Math.exp(-2.14+1.21*ind+0.70*xanth+0.37*Math.pow(xanth,2)-2.88*kyn3oh-1.32*anthacid-2.07*chlorokyn-3.79*ind*xanth+0.95*ind*Math.pow(xanth,2)+2.25*ind*chlorokyn));
			
			outt.innerHTML=1-(pr2+pr3+pr4+pr5);

}
compute();
