// untuk id jika sama bisa di ganti

// function showFields() {
//     var jenisSurat = document.getElementById("jenisSurat").value;
//     var fieldsContainer = document.getElementById("fieldsContainer");
//     var formContent = "";

//     // Hapus semua elemen form yang ada di dalam fieldsContainer
//     while (fieldsContainer.firstChild) {
//         fieldsContainer.removeChild(fieldsContainer.firstChild);
//     }

//     // Tambahkan form yang sesuai berdasarkan pilihan
//     switch (jenisSurat) {
//         case "pengantar_SKCK":
//             formContent = `
//                 <form id="skckForm">
//                     @include('Admin.pembuatan-surat.skck')
//                 </form>
//             `;
//             break;
//         case "SKTM":
//             formContent = `
//                 <form id="SKTMForm">
//                     @include('Admin.pembuatan-surat.sktm')
//                 </form>
//             `;
//             break;
//         case "surat_izin":
//             formContent = `
//                 <form id="suratIzinForm">
//                     @include('Admin.pembuatan-surat.surat-izin')
//                 </form>
//             `;
//             break;
//         case "surat_kematian":
//             formContent = `
//                 <form id="suratKematianForm">
//                     @include('Admin.pembuatan-surat.surat-kematian')
//                 </form>
//             `;
//             break;
//         case "slip_gaji":
//             formContent = `
//                 <form id="suratPenghasilanForm">
//                     @include('Admin.pembuatan-surat.surat-penghasilan')
//                 </form>
//             `;
//             break;
//         default:
//             // Kosongkan formContent jika tidak ada pilihan yang dipilih
//             break;
//     }

//     // Tambahkan formContent ke dalam fieldsContainer
//     fieldsContainer.innerHTML = formContent;
// }



// cek pekerjaan

function checkOther() {
    var pekerjaanSelect = document.getElementById("pekerjaan");
    var otherJobDiv = document.getElementById("otherJob");
    var otherPekerjaanInput = document.getElementById("otherPekerjaan");

    if (pekerjaanSelect.value === "Lainnya") {
        otherJobDiv.style.display = "block";
        otherPekerjaanInput.required = true;
    } else {
        otherJobDiv.style.display = "none";
        otherPekerjaanInput.required = false;
    }
}

// fungsi button
// button refresh
function clearForm() {
    document.getElementById("myForm").reset();
}

function openNewTab(url) {
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var form = document.createElement('form');
        form.setAttribute('method', 'POST');
        form.setAttribute('action', url);
        form.setAttribute('target', '_blank');
        
        var csrfInput = document.createElement('input');
        csrfInput.setAttribute('type', 'hidden');
        csrfInput.setAttribute('name', '_token');
        csrfInput.setAttribute('value', token);
        
        form.appendChild(csrfInput);
        document.body.appendChild(form);
        form.submit();
    }

    

