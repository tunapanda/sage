export default {
  init() {
    $(document).on("h5pXapiStatementSaved", function (e) {
      if (e.message && e.message.swagifactComplete) {
        $('.swagpath-swagifact.is-current a').prepend('<i class="fas fa-check-circle"></i>');
      }

      if (e.message && e.message.swagpathComplete) {
        $('.entry-title').prepend('<i class="fas fa-check-circle"></i>');
			}
    });
  },
}