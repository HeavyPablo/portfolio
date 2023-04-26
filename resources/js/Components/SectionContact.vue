<script setup>

defineProps({
    email: {
        type: String,
        default: ''
    },
    phone: {
        type: String,
        default: ''
    }
});

</script>

<template>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contacto</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><a :href="'mailto:'+email.replace(' ', '')">{{ email }}</a></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Teléfono:</h4>
                            <p><a :href="'tel:'+phone.replace(' ', '')">{{ phone }}</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
</template>
