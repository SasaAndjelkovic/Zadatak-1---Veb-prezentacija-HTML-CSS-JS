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
    let karte = parseInt($("input[type='number'").val());
    console.log(karte);
    switch (karte) {
      case 1:
        broj = "kartu";
        break;
      case 2:
        broj = "karte";
        break;
      case 3:
        broj = "karte";
        break;
      case 4:
        broj = "karte";
        break;
      case 5:
        broj = "karata";
        break;
      case 6:
        broj = "karata";
        break;
      default:
        console.log("Greska!");
    }
    $("form").hide();
    $(".potvrda").height( 70 );
    $(".potvrda").css({"pading":"5%"});
    if (datum == "") $(".potvrda").html("Izvini. Nisi uneo datum.");
    if (karte > 6) {
      $(".potvrda").html("Izvini. Maksimalni broj karata je 6.");
    } else {
      $(".potvrda").html("Kupili ste " + karte + " " + broj + " za predstavu " + text + ". Dobrodosli!");
    }
})