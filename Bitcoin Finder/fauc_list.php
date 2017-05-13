<?php

$directorio="sitios/pg/faucetbox/";
if ($gestor = opendir($directorio))
   
{
    $list=array();
    while (false !== ($arch = readdir($gestor)))
    {
        if ($arch != "." && $arch != "..")
        {
            $list[]=$arch;
        }
    }
    sort($list);
        foreach($list as $fileName)
        {   

        include_once("sitios/pg/faucetbox/" .$fileName);
// sleep(3);
        }
    closedir($gestor);

}
?>

<script type="text/javascript">
//###################################################################
// Author: ricocheting.com
// Version: v3.0
// Date: 2014-09-05
// Description: displays the amount of time until the "dateFuture" entered below.

var CDown = function() {
      this.state=0;// if initialized
      this.counts=[];// array holding countdown date objects and id to print to {d:new Date(2013,11,18,18,54,36), id:"countbox1"}
      this.interval=null;// setInterval object
}

CDown.prototype = {
      init: function(){
            this.state=1;
            var self=this;
            this.interval=window.setInterval(function(){self.tick();}, 1000);
      },
      add: function(date,id){
            this.counts.push({d:date,id:id});
            this.tick();
            if(this.state==0) this.init();
      },
      expire: function(idxs){
        var currString = '<img height="35" width="35" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png">'
            for(var x in idxs) {
                this.display(this.counts[idxs[x]], '<font color="#ff0000"><b>'+ currString +' </b></font>');

                this.counts.splice(idxs[x], 1);

            }
      },
      format: function(r){
            var out="";
            if(r.h != 0){out += r.h +" "+((r.h==1)?":":":")+" ";}
            out += r.m +" "+((r.m==1)?":":":")+" ";
            out += r.s +" "+((r.s==1)?":":":")+" ";

            return out.substr(0,out.length-2);
      },
      math: function(work){
            var   y=w=d=h=m=s=ms=0;

            ms=(""+((work%1000)+1000)).substr(1,3);
            work=Math.floor(work/1000);//kill the "milliseconds" so just secs
            
            y=Math.floor(work/31536000);//years (no leapyear support)
            w=Math.floor(work/604800);//weeks
            d=Math.floor(work/86400);//days
            h=Math.floor(work/3600);//hours
            work=work%3600;

            m=Math.floor(work/60);//minutes
            work=work%60;

            s=Math.floor(work);//seconds

            return {y:y,w:w,d:d,h:h,m:m,s:s,ms:ms};
      },
      tick: function(){
            var now=(new Date()).getTime(),
                  expired=[],cnt=0,amount=0;

            if(this.counts)
            for(var idx=0,n=this.counts.length; idx<n; ++idx){
                  cnt=this.counts[idx];
                  amount=cnt.d.getTime()-now;//calc milliseconds between dates

                  // if time is already past
                  if(amount<0){
                        expired.push(idx);

                  }
                  // date is still good
                  else{
                        this.display(cnt, this.format(this.math(amount)));
                  }
            }

            // deal with any expired
            if(expired.length>0) this.expire(expired);

            // if no active counts, stop updating
            if(this.counts.length==0) window.clearTimeout(this.interval);
            
      },
      display: function(cnt,msg){
            document.getElementById(cnt.id).innerHTML=" "+msg;
      }
};

// ---------------------------------------------------

var speed, currentpos=curpos1=0,alt=1,curpos2=-1

function initialize(){
if (window.parent.scrollspeed!=0){
speed=window.parent.scrollspeed
scrollwindow()
}
}

function scrollwindow(){
temp=(document.all)? document.body.scrollTop : window.pageYOffset
alt=(alt==0)? 1 : 0
if (alt==0)
curpos1=temp
else
curpos2=temp

window.scrollBy(0,speed)
}

setInterval("initialize()",10)


</script>