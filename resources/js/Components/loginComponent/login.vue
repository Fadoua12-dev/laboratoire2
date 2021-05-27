<template>
    <div>
        <div class="container">
            <div
                class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20 col-md-4"
            >
                <div class="login_header">
                    <h1>Login to the dashboard</h1>
                </div>
                <form action="" method="post">
                    <div class="space">
                        <input
                            type="email"
                            v-model="data.email"
                            placeholder="Email"
                            required
                        />
                    </div>
                    <div class="space">
                        <input
                            type="password"
                            v-model="data.password"
                            placeholder="******"
                            required
                        />
                    </div>
                    <div class="login_footer">
                        <Button
                            type="primary"
                            @click.prevent.stop="login"
                            :disabled="isLogging"
                            :loading="isLogging"
                            >{{ isLogging ? "Loging..." : "Login" }}</Button
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            data: {
                email: "",
                password: ""
            },
            isLogging: false
        };
    },

    methods: {
        async login() {
            if (this.data.email.trim() == "") {
                alert("Email is required");
                return false;
            }
            if (this.data.password.trim() == "") {
                alert("Password is required");
                return false;
            }
            if (this.data.password.length < 6) {
                alert("Incorrect login details");
                return false;
            }
            this.isLogging = true;

            axios
                .post("/login", {
                    email: this.data.email,
                    password: this.data.password
                })
                .then(res => {

                    if (res.data.status) {
                        location.href = res.data.message;
                    } else {
                        alert(res.data.message);

                    }

                })
                .catch(err => {
                    console.log("error ", err);
                });

            this.isLogging = false;
        }
    }
};
</script>

<style scoped>
._1adminOverveiw_table_recent {
    margin: 0 auto;
    margin-top: 220px;
}
.login_footer {
    text-align: center;
}
.login_header {
    text-align: center;
    margin-bottom: 25px;
}
._border_radious {
    border-radius: 3px;
}
._box_shadow {
    background: #fff;
    -webkit-box-shadow: 0 10px 20px rgba(47, 91, 231, 0.1);
    box-shadow: 0 10px 20px rgba(47, 91, 231, 0.1);
}
.space {
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
}
._p20 {
    padding: 18px 20px 25px;
}
._mar_b30 {
    margin-bottom: 30px;
}
.container {
    margin: auto;
    width: 500px;
}
</style>
