require("./bootstrap")
import Vue from "vue";

const vm = new Vue({

    el: "#app",
    data: {

        firstName: "",
        lastName: "",
        email: "",
        password: "",
        passwrodRepeat: "",
        role: 0,
    },
    methods: {

        register() {

            if (this.firstName.length == 0 || this.lastName.length == 0 || this.email.length == 0 || this.password.length == 0 || this.passwrodRepeat.length == 0) {

                alert("Please Fill All Field");
            } else {

                if (this.password != this.passwrodRepeat) {

                    alert("Password Not Matched");
                } else {

                    // send To Database
                    axios.post("/register", {

                        firstName: this.firstName,
                        lastName: this.lastName,
                        email: this.email,
                        password: this.password,
                        role: this.role
                    }).then(res => {

                        if (res.data.status) {

                            location.href = res.data.message;
                        } else {

                            alert(res.data.message);
                        }

                    }).catch(err => {

                        console.log(err);
                    })
                }
            }

        }
    }
})