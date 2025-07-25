<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline" id="aboutTitle">About Me</span></h2>
                    <p class="lead fw-light mb-4" id="aboutSemiTitle">Hi, I am Md. Al-Maruf. I enjoy programming</p>
                    <p class="text-muted" id="aboutDetails">i have spent my university first year on
competitive programming. I participated in many online and offline
programming contests and built several projects. As a tech enthusiast, I am
always eager to learn new technologies.</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        {{-- <a class="text-gradient" id="twitterLink" href="#!"><i class="bi bi-twitter"></i></a> --}}
                        <a class="text-gradient" id="linkedinLink" href="https://www.linkedin.com/in/adnan-al-maruf-06b3411ba/" target="__blank"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" id="githubLink" href="https://github.com/AdnanAlMaruf" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const getHeroAboutMeProp = async () =>{
        const allProperties = await axios.get('/getAaboutDetails');
        if(allProperties.status === 200){
            document.getElementById('aboutTitle').innerText = allProperties.data[0].title;
            document.getElementById('aboutSemiTitle').innerText = allProperties.data[0].shortDescription;
            document.getElementById('aboutDetails').innerText = allProperties.data[0].details;
        }
        else{
            alert('Server error!');
        }
    }
    getHeroAboutMeProp();

    const getSocialIcons = async () =>{
        const allProperties = await axios.get('/getSocialLinks');
        document.getElementById('loading-div').classList.add('d-none');
        if(allProperties.status === 200){
            document.getElementById('twitterLink').setAttribute('href', allProperties.data[0].twitterLink)
            document.getElementById('githubLink').setAttribute('href', allProperties.data[0].githubLink)
            document.getElementById('linkedinLink').setAttribute('href', allProperties.data[0].linkedinLink)
        }
        else{
            alert('Server error!');
        }
    }
    getSocialIcons()
</script>
