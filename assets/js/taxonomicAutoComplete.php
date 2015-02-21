var tax = document.getElementById("taxonomic");
        var sea = document.getElementById("searchDiv");
        var ctt = "";
        
        function clearString()
        {
        document.getElementById('taxonomic').value = '';
        }
        
        function updateSearch(str, field)
        {
       		
            str = str.split(",");
            str = str.pop();
            str = str.trim();
      
            if(field == 1)
            {
            	
                if (window.XMLHttpRequest)
                {
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
      
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("resultsSpecies").innerHTML=xmlhttp.responseText;
                    }
                }
                
                xmlhttp.open("POST","http://codingcoffee.com/searchFieldUpdate/updateSpecies.php?str="+str,true);
                
                xmlhttp.send();
            }
            
            if(document.getElementById('taxonomic').value.length > 0)
            {
                document.getElementById('submitDiv').style.display= 'inline';
                document.getElementById('searchDiv').style.display= 'inline';
            }
            else
            {
                document.getElementById('submitDiv').style.display= 'none';
                document.getElementById('searchDiv').style.display= 'none';
            }
        }    
        
        function updateSearchClick(str, field)
        {
            str = str.split(",");
            str = str.pop();
            str = str.trim();
      
            if(field == 1)
            {
                if (window.XMLHttpRequest)
                {
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
      
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("resultsSpecies").innerHTML=xmlhttp.responseText;
                    }
                }
                
                xmlhttp.open("POST","http://codingcoffee.com/searchFieldUpdate/updateSpecies.php?str="+str,false);
                xmlhttp.send();
            }
            
            if(document.getElementById('taxonomic').value.length > 0)
            {
                document.getElementById('submitDiv').style.display= 'inline';
                document.getElementById('searchDiv').style.display= 'inline';
            }
            else
            {
                document.getElementById('submitDiv').style.display= 'none';
                document.getElementById('searchDiv').style.display= 'none';
            }
        }    
    
        function fillSpecies(val)
        {
            content = val;
      
            if(ctt == "")
            {
                ctt = ctt + val;
            }
            else
                ctt = ctt + ", " + val;
      
            document.getElementById("taxonomic").value=ctt;
            document.getElementById("resultsSpecies").innerHTML="";
        }
    
        function clearSpecies()
        {
            document.getElementById("resultsSpecies").innerHTML="";
        }
    
        function taxHelp()
        {
            alert("For multiple searches use a ',' to separate terms.");
        }
    
        function regionHelp()
        {
            alert("For multiple searches use a ',' to separate terms. For a range use ':'");
        }