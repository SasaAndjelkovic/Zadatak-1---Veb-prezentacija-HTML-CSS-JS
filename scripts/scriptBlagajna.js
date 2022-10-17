$("input[type='submit']").click(function(e){
    e.preventDefault();
    let datum = $("input[type='date']").val();
    const d = new Date(datum);
    let day = d.getDay()
    switch (day) {
        case 0:
          text = "Nedeljom nema predstave!";
          break;
        case 1:
          text = "Kameno jezero";
          break;
        case 2:
          text = "Konji Svetog Marka";
          break;
        case 3:
          text = "Devojka koja je citala u metrou";
          break;
        case 4:
          text = "Uska staza ka dalekom severu";
          break;
        case 5:
          text = "Ljubav na zadnji pogled";
          break;
        case 6:
          text = "U zagrljaju purpurnih kisa";
          break;
        default:
          console.log("Greska")
      }
    let karte = $("input[type='number'").val();
    $("form").hide();
    $(".potvrda").html("Kupili ste " + karte + "karata za " + text + ". Dobrodosli!</h1>");
})