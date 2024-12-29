import axios from 'axios';
export function getImportedAsset_(path: string): string {
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    let result = { link: '' };
    axios
        .get('/api/asset/imported/link?path=' + path)
        .then((response) => {
            result = response.data;
            console.log(response.data.link); // Prints: http://127.0.0.1:8000
        })
        .catch((error) => {
            console.error('There was an error!', error);
        });
    return `${window.location.origin}/${result.link.replace(/^\//, '')}`;
}

export function getImportedAsset(path: string): string {
    // // eslint-disable-next-line @typescript-eslint/no-unused-vars
    // let result = { link: '' };
    // axios
    //     .get('/api/asset/imported/link?path=' + path)
    //     .then((response) => {
    //         result = response.data;
    //         console.log(response.data.link); // Prints: http://127.0.0.1:8000
    //     })
    //     .catch((error) => {
    //         console.error('There was an error!', error);
    //     });
    return `${window.location.origin}/${'assets/' + path.replace(/^\//, '')}`;
}
