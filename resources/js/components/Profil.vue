<template>
   <div id="profil">
   <router-link to="/films">
   
   <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">
</router-link>

    <p class="title-register">Profil Settings</p>
       <navbar></navbar>
       <br>
      <div id="profil-container">

       
         <form action="" method="post">
            <div class="add-account">
               <label for="user"></label>
               <img class="icon-login" src="./img/icon/user.svg" alt="">
               <input maxlength="10" class="input-info" required v-model="newUser.pseudo" type="user" placeholder="New User">
               <br>

               <br><br>

   
            </div>
         </form>
         <new-account :AddingUser='newUser.pseudo' ></new-account>
      </div>
   
   
      <br>

   
   </div>
</template>

<script>
   export default {


      data() {
         return {
            nouser: false,
            useradd: false,
            newUser: {
               pseudo: '',
               firstname:'yoyo',
               account: '137'
            },
         }
   
      },
      methods: {

         addUser: function addUser() {
            var addNewUser = this.newUser;
            var vm = this;
   
            if (addNewUser['user'] === '') {
               console.log('Need to be completed');
               this.nouser = true;
               this.useradd = false;
            } else {
               this.ActualUsers.push('Yolo');

               this.useradd = true;
               this.nouser = false;
               axios.post('/api/users', addNewUser).then((response) => {
                  console.log("test");
                  // window.location = response.data.redirect;
               });

            }
   
         },
         back() {
            window.history.back()
         },
   
   
      }
   }
</script>

<style>
   #profil {
      position: relative;
      text-align: center;
   }

</style>