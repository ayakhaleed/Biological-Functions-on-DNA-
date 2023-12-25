function form_validation()
{
    seq=document.getElementById("seq").value;
    k=document.getElementById("k").value;

    if(seq=="")
    {
        alert("seq must be filled out!");
        return false;
    }
    if(k=="")
    {
        alert("K-mer value must be filled out!");
        return false;
    }

    if(seq.length>4000)
    {
        
        alert("seq length must be less than 4000 character!");
        return false;
    }
    if(k.length>2)
    {
        alert("k length must be 3 bits or less!");
        return false;
    }
    var i;
    var size=seq.length;
    for(i=0;i<size;i++)
    {
        if(seq[i]!='A'&& seq[i]!='C' && seq[i]!='G' && seq[i]!='T')
        {
            alert("you must enter valid Sequence include only('A' or 'C' or 'G' or 'T')");
            return false;
        }
    }
    

}