<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top:50px">
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" type="text" id="date" name="date" placeholder="Data" />
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="phone" name="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="Telefone" />
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="cep" name="cep" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="CEP" />
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script>
    <script>
        // Máscara de INPUT do tipo DATE, PHONE
        jQuery(function($) {
            $("#date").mask("99/99/9999");
            $("#phone").mask("(999) 999-9999");
            $("#cep").mask("99999-999");
        });

        function mask(o, f) {
            setTimeout(function() {
                var v = mphone(o.value);
                if (v != o.value) {
                    o.value = v;
                }
            }, 1);
        }

        function mphone(v) {
            var r = v.replace(/\D/g, "");
            r = r.replace(/^0/, "");
            if (r.length > 10) {
                r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (r.length > 5) {
                r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (r.length > 2) {
                r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                r = r.replace(/^(\d*)/, "($1");
            }
            return r;
        }
    </script>
</body>

</html>