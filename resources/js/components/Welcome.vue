<template>
    <div id="welcome">
        <div v-if="!log">
            <img class="logo-welcome" src="./img/logo-transparent-welcome.png" height="1080px" alt="logo-beeflix">

            <div class="button-welcome">
          <router-link to="/login">    <input class="welcome-button" type="submit" value="Sign-In" name="signin"> </router-link>  
<router-link to="/register">
                <input type="button" value="Register" class='welcome-button' > </router-link>  
            </div>
            <br>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            try {
                return {
                    log: account,
                }
            } catch (err) {
                return {
                    log: false,
                }
            }

            return {
                welcome: true,
            }
        },

        methods: {
             //  signin: function signin() {
                 // this.$router.push({name: "login"});
               //  this.sign_in = true;
               //  this.register = false;
               //  this.welcome = false;
            //   },
             //  registering: function registering() {
              //    this.$router.push({name: "register"});
               // this.register = true;
               // this.sign_in = false;
               // this.welcome = false;
            //   },
             //  tests() {
                // Pour afficher un film sélectionné
                // axios("/films/1").then(response => {
                //     this.$store.state.film = response.data.film;
                //     this.$router.push({path: "films/" + response.data.film.title});
                // });
            }
        }
    

</script>

<style>
    body {
        background-color: #000010;
    }

    #welcome {
        position: relative;
        text-align: center;
    }

    .welcome-button {
        border: none;
        cursor: pointer;
        width: 120px;
        height: 36px;
        border-radius: 50px;
        background: #001935;
        font-size: 18px;
        font-style: normal;
        font-weight: normal;
        line-height: normal;
        color: #2E3F5F;
        text-align: center;
        margin-right: 80px;
    }

    .logo-welcome {
        margin-top: -290px;
    }

    .button-welcome {
        margin-top: -270px;
        text-align: center;
        padding-bottom: 20px;
        margin-left: 40px;
    }



</style>
