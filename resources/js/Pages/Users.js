import axios from "axios";
import Swal from "sweetalert2";

export class Users {
    constructor() {
        this.load();
    }

    load() {
        this.events();
        this.getData();

        // $("#usersTable").dataTable();
    }

    events() {
        let self = this;

        $("body").on("click", ".saveUserBtn", function () {
            self.saveUser();
        });
    }

    getData() {
        $("#usersTable").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "/api/users/getData",
                type: "POST",
            },
            columns: [
                { data: "name", name: "name" },
                { data: "email", name: "email" },
                { data: "phone", name: "phone" },
                { data: "status_name", name: "status_name" },
                { data: "action", name: "action" },
            ],
        });
    }

    async saveUser() {
        const userdata = {
            name_surname: $(".name_surname").val(),
            email: $(".email").val(),
            phone: $(".phone").val(),
            password: $(".password").val(),
            password_rep: $(".password_rep").val(),
            status: $(".status").val(),
            user_id: $(".user_id").val()
        };
        const { data } = await axios.post("/api/users/saveUser", userdata);
        if (data && data.status) {
            Swal.fire({
                title: "Bilgi",
                text: data.message,
                icon: "success",
            }).then(() => {
                window.location.href = "/users";
            });
        } else {
            Swal.fire("Hata", data.message, "error");
        }
    }
}
