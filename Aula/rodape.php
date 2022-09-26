</div>


<script src="./script/bootstrap.bundle.min.js"></script>

</body>

<footer>
    <p>Copyright&copy;Carlos Candido
        <script>
            var today = new Date();
            var year = today.getFullYear()
            var week = today.getDay()
            var month = today.getMonth()
            document.write(year)
            if(week.value == "0"){  
                document.write(` Domingo`)
            } else if (week == "1") {
                document.write(" Segunda-Feira")
            } else if (week == "2") {
                document.write(" Terça-Feira")
            } else if (week == "3") {
                document.write(" Quarta-Feira")
            } else if (week == "4") {
                document.write(" Quinta-Feira")
            } else if (week == "5") {
                document.write(" Sexta-Feira")
            } else {
                document.write(" Sabado")
            }
        </script>
    </p>
</footer>

</html>

<?php

?>