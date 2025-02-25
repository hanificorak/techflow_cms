import axios from "axios";
import Swal from "sweetalert2";

export class Users {
    constructor() {
        this.load();

    };

    load() {
        this.events();
        this.getData();

        // $("#usersTable").dataTable();

    }

    events() {
        let self = this;
      

    }

    getData() {
        $('#usersTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "/api/users/getData",
                type: "POST"
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



}