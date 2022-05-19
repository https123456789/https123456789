import { useRouter } from 'next/router';
import style from "./styles.module.css";

export async function getServerSideProps(context) {
	const { projectName } = context.query;
	// Fetch data from external API
	const res = await fetch(`https://githubapi.https12345678.repl.co/github/repos/https123456789/${projectName}`);
	const data = await res.json();
	
	// Pass data to the page via props
	return {
		props: {
			data: {
				githubAPIData: data
			}
		}
	}
}

export default function ProjectDisplayCard(props) {
	const router = useRouter();
	const { projectName } = router.query;
	var stars = 0;
	var description = null;
	var language = null;
	var gd = props.data.githubAPIData;
	if (gd) {
		stars = gd.stargazers_count;
		if (gd.description) {
			description = gd.description;
		}
		if (gd.language) {
			language = gd.language;
		}
	}
	return (
		<a href={`https://github.com/https123456789/${projectName}`} target="_blank" rel="noreferrer">
			<div className={style.card}>
				<h1 className={style.title}>{ projectName }</h1>
				<p className={style.description}>{description}</p>
				<div className={style.details}>
					<div><p className={style.attribute}>
						<img src="/icons/star.svg" alt=""/>
						<span>{stars}</span>
					</p></div>
					<div><p className={style.attribute}>
						<img src="" alt=""/>
						<span>{language}</span>
					</p></div>
				</div>
			</div>
		</a>
	)
}