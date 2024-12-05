<?php
use app\cores\View;
?>

<section class="flex min-h-screen">
    <?php View::renderComponent("dashboard/sidebar", View::getData()) ?>

    <!-- Main Content -->
    <div class="flex-1 p-8">

        <?php View::renderComponent("dashboard/studentData") ?>
        <?php View::renderComponent("dashboard/competitionData") ?>
        <?php View::renderComponent("dashboard/supervisorData") ?>
        <?php View::renderComponent("dashboard/administrative") ?>

        <div class="bg-white rounded-lg p-6">
            <div class="flex justify-start items-center mt-8 space-x-4">
                <!-- button save-->
                <button
                    class="flex items-center text-[14px] font-semibold bg-[#49B195] text-white py-2 px-5 rounded-md hover:bg-[#6F38C5] transition shadow-lg">
                    <img src="/public/assets/icon/save_icon.png" alt="save icon" class="w-4 h-5 mr-2">
                    Simpan
                </button>

                <!-- button back -->
                <button
                    class="flex items-center text-[14px] font-semibold bg-gray-200 text-gray-700 py-2 px-5 rounded-md hover:bg-gray-300 transition shadow-lg">
                    <img src="/public/assets/icon/back_icon.png" alt="back incon Icon" class="w-5 h-5 mr-2">
                    Kembali
                </button>
            </div>
        </div>
    </div>
</section>

<script type="module">
import fragments from "/public/js/fragments/studentDashboard.js"

$(() => {

    const states = {
        student: 1,
        supervisor: 1
    }

    $("#add-student-btn").on("click", () => {
        states.student++;
        $("#container-student-input").append(fragments.getStudentInputFragment(states.student));
    })

    $("#add-supervisor-btn").on("click", () => {
        states.supervisor++;
        $("#container-supervisor-input").append(fragments.getSupervisorInputFragment(states
        .supervisor));
    })

})
</script>