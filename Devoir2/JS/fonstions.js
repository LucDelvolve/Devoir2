function GetMaison(idMaison)
{
    $.ajax
    (
        {
            type: 'get',
            url: "GetMaison.php",
            data:"idMaison="+idMaison,
            success:function(data)
            {
                $('#divMaison').empty();
                $('#divVol').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les maisons");
            }
        }
    );
}

function GetChambre(idChambre)
{
    $.ajax
    (
        {
            type: 'get',
            url: "GetChambre.php",
            data:"idChambre="+idChambre,
            success:function(data)
            {
                $('#divChambre').empty();
                $('#divMaison').empty();
                $('#divChambre').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les chambres");
            }
        }
    );
}

function GetEnfant(idEnfant)
{
    $.ajax
    (
        {
            type: 'get',
            url: "GetEnfant.php",
            data:"idEnfant="+idEnfant,
            success:function(data)
            {
                $('#divEnfant').empty();
                $('#divChambre').empty();
                $('#divEnfant').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les enfants");
            }
        }
    );
}