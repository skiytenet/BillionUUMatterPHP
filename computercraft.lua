local function updateFluid(fluid, totAmount, capacity)
        http.post(
                "http://skiyte.net/fluids/updatefluids.php",
                "fluid="..textutils.urlEncode(tostring(fluid)).."&"..
                "amount="..textutils.urlEncode(tostring(totAmount)).."&"..
                "capacity="..textutils.urlEncode(tostring(capacity))
        )
end
updateFluid("UU", 1337, 13371337)
