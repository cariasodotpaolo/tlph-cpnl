/**
 * Created by paolo on 12/1/2014.
 */
function getContent(sourceID, contentUrl, container)
{
    $.ajax({
        type: "GET",
        //url: "contact-details.php",
        url: contentUrl,
        data: "id=" + sourceID, // appears as $_GET['id'] @ ur backend side
        success: function(data) {
            // data is ur summary
            //$('#center-content').html(data);
            $('#' + container).html(data);
        }
    });
}
