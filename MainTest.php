<!DOCTYPE html>
<html>

<head>
	<?php 
		include("Vue/PHP de base/InclusionTemplate.php");
		include("Vue/PHP de base/InclusionJQuery.php");
	?>
	<script></script>
</head>

<body>

	<?php
		include("Vue/PHP de base/EnteteSite.php");
		include("Vue/PHP de base/MenuProf.php");
	?>
	
	<div class="contenu">
	</div>
	
	<?php
		include("Vue/PHP de base/BasDePage.php");
	?>
	<script>
        $("div").click( function() {
            $.ajax({
                type: 'POST',
                url: 'Test.php',
                data: { "NombreUn":1, "NombreDeux":5},
                dataType: 'text',
                success: function (data) {
                    alert(data);
                }

            });
        });
	</script>

</body>

</html>