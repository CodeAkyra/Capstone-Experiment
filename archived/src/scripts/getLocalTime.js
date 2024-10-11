function setPHTDateTime() {
    const now = new Date();

    // Get the UTC time and add 8 hours for GMT+8
    now.setHours(now.getUTCHours() + 16);

    // YYYY-MM-DDTHH:MM' for the datetime-local input
    const formattedDateTime = now.toISOString().slice(0, 16);

    document.getElementById('dateTimeInput').value = formattedDateTime;
}

setPHTDateTime();
