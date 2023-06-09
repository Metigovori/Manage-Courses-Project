<section id="footer-section">
         <footer class="footer">
            <h1>
              All rights reserved by state of Kosovo 2023 <strong>&#174</strong> 
            </h1>
        </footer>
      </section>

      
       


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
<script src="script\jquery-3.6.0.js"></script>
<script src="script\jquery.validate.min.js"></script>
<script>
    $().ready(function() {
        $("#registration").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                fjalekalimi: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                fjalekalimi: {
                    required: "Ju lutem shkruani fjalekalimin",
                    minlength: "Fjalekalimi duhet te ket se paku 5 karaktere"
                },
                email: {
                    required: "Ju lutem shkruani emailin",
                    email: "Ju lutem shkruani nje email valide"
                }
            }

        });
        $("#studenti").validate({
            rules: {
                emri: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                mbiemri: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                telefoni: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                fjalekalimi: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                emri: {
                    required: "Ju lutem shenoni emrin",
                    minlength: "Emri i juaj duhet te kete se paku tre karaktere",
                    lettersonly: "Emri nuk duhet te kete numra "
                },
                mbiemri: {
                    required: "Ju lutem shenoni mbiemrin",
                    minlength: "Mbiemri i juaj duhet te kete se paku tre karaktere",
                    lettersonly: "Mbiemri nuk duhet te kete numra "
                },
                telefoni: {
                    required: "Ju lutem shenoni telefonin"
                },
                email: {
                    required: "Ju lutem shenoni emailin",
                    email: "Ju lutem shenoni emaili adres valide"
                },
                fjalekalimi: {
                    required: "Ju lutem shenoni fjalekalimin",
                    minlength: "Fjalekalimi i juaj duhet te kete se paku gjashte karaktere"
                }

            }
        });
        $("#kursi").validate({
            rules: {
                dataefillimit: {
                    required: true,
                },
                kohezgjatja: {
                    required: true,
                },
                qmimi: {
                    required: true,
                }
            },
            messages: {
                dataefillimit: {
                    required: "Ju lutem shenoni daten e fillimit",
                },
                kohezgjatja: {
                    required: "Ju lutem shenoni kohezgjatjen",
                },
                qmimi: {
                    required: "Ju lutem shenoni pershkrimin",
                }
            }
        });
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "Letters only please");
    });
    </script>
</body>
</html>