(()=>{var e=document.getElementById("sidebar"),t=document.getElementById("toogle-icon"),s=document.getElementById("load-page");function o(e){localStorage.setItem("statusSideBar",e)}"Open"===localStorage.getItem("statusSideBar")&&e.classList.add("close"),t.addEventListener("click",(function(){s.style.display="block",document.body.classList.add("load-show"),setTimeout((function(){s.style.display="none",document.body.classList.remove("load-show")}),200),e.classList.contains("close")?o("Hide"):o("Open"),e.classList.toggle("close")}))})();