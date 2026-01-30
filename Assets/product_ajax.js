function searchProduct()
{
    let name = document.getElementById("search").value;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controllers/searchProduct.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("name=" + name);
    
    xhr.onreadystatechange = function ()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById("productTable").innerHTML = this.responseText;
        }
    };
}

function deleteProduct(id)
{
    if(confirm('Are you sure you want to delete this product?'))
    {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controllers/deleteProduct.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("id=" + id);
        
        xhr.onreadystatechange = function ()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                location.reload();
            }
        };
    }
}