/**
 * FetchData()
 * Fetches data from a specified url
 * 
 * @param {URL} url - The URL to fetch from
 * @returns {Response} Data is respone OK, error 400 if failure
 */
async function FetchData(url) {
  try {
    const RESPONSE = await fetch(url);
    if (!RESPONSE.ok)
      throw new Error(`Warning: Error fetching data: ${RESPONSE.status}`);

    const JSON = await RESPONSE.json();

    return JSON;
  } catch (error) {
    console.error(error.message);
    return new Response()
      .status(400)
      .statusText("Error processing response. See console for details.");
  }
}
